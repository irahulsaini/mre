<?php
defined('BASEPATH') or exit('No direct access allowed');
class form_handler_helper{
    static function contact_form($fields){
        if(empty($fields['name'])){
            return 'Please enter Your Name';
        }
        if(empty($fields['email'])){
            return 'Please Enter Email';
        }
        if(empty(filter_var($fields['email'],FILTER_VALIDATE_EMAIL))){
            return 'Email is Invalid';
        }
        if(empty($fields['phone'])){
            return 'Please Enter Phone/Mobile Number';
        }
        if(!(is_numeric($fields['phone']))){
            return 'Invalid Phone/Mobile Number';
        }
        if(strlen($fields['message']) < 20){
            return 'Please Enter few words in Your message';
        }
        $field = array();
        foreach($fields as $key => $value){
            $field[$key] = strip_tags($value);
        }
        $fields = $field;
        $config = config_item('mail');
        $contact = $config['contact'];
        if(empty($contact)){
            return 'Invalid Configuration, Please contact site Administrator';
        }
        $subject = key2value($fields,$contact['subject_1']);
        $message = key2value($fields,$contact['message_1']);
        $status = send_mail($config['mail_to'],$subject,$message,array('reply_to'=>$fields['email']));
        
        if($config['mail_2'] == 1 && $status == 1 && $fields['email']){
            $subject = key2value($fields,$contact['subject_2']);
            $message = key2value($fields,$contact['message_2']);
            send_mail($fields['email'],$subject,$message,array('reply_to'=>$config['from_email']));
        }
        return $status;
    }
    
    static function call_form($fields){
        if(empty($fields['phone'])){
            return 'Please Enter Phone/Mobile Number';
        }
        if(!(is_numeric($fields['phone'])) || strlen($fields['phone']) < 10 || strlen($fields['phone']) > 12){
            return 'Invalid Phone/Mobile Number';
        }
        $field = array();
        foreach($fields as $key => $value){
            $field[$key] = strip_tags($value);
        }
        $fields = $field;
        $config = config_item('mail');
        $contact = $config['call_form'];
        if(empty($contact)){
            return 'Invalid Configuration, Please contact site Administrator';
        }
        $subject = key2value($fields,$contact['subject_1']);
        $message = key2value($fields,$contact['message_1']);
        $status = send_mail($config['mail_to'],$subject,$message);
        
        return $status;
    }
    
}