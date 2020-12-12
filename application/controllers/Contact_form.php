<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_form extends CI_Controller {
    private $_mail_1 = [];
    private $_mail_2 = [];
    private $_from = [];
    private $_mail = [];

    public function __construct(){
        parent::__construct();
	    $this->load->config('mail_config');
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	    $this->load->library('email');
	    $this->_mail = config_item('mail');
	    $this->from = array(
	    	'name'			=> $this->_mail['from_name'],
	    	'email'			=> $this->_mail['from_email']
	   	);
	    $this->mail_1 = array(
	        'to'            => $this->_mail['to'],
	        'cc'            => @$this->_mail['cc'],
	        'bcc'           => @$this->_mail['bcc'],
	        'subject'       => $this->_mail['contact']['subject_1'],
	        'body'          => $this->_mail['contact']['message_1']
	    );
	    $this->mail_2 = array(
	        'subject'       => $this->_mail['contact']['subject_2'],
	        'body'          => $this->_mail['contact']['message_2']
	    );
    }

	public function index(){
	    $form = $this->get_fields();
	    if(empty($form) || !count($form)){
	        $status     = 'error';
	        $message    = 'Invalid Form Data';
	    }else{
	        $validate = $this->validate_form();
	        if($validate === true){
		        if(!empty($this->mail_1['cc'])){
		            $this->email->cc($this->mail_1['cc']);
		        }
		        if(!empty($this->mail_1['bcc'])){
		            $this->email->cc($this->mail_1['bcc']);
		        }
		        $status = $this->send_mail(
		        	$this->mail_1['to'],
		        	key2value($form,$this->mail_1['subject']),
		        	key2value($form,$this->mail_1['body']),
		        	!empty($this->mail_1['cc'])?$this->mail_1['cc']:'',
		        	!empty($this->mail_1['bcc'])?$this->mail_1['bcc']:''
		        );
	            if($status == true){
	            	if(!empty($form['email']) && filter_Var($form['email'],FILTER_VALIDATE_EMAIL) && $this->_mail['mail_2'] == 1){
	            		$this->send_mail(
				        	$form['email'],
				        	key2value($form,$this->mail_2['subject']),
				        	key2value($form,$this->mail_2['body'])
				        );
	            	}
	                $status = 'success';
	                $message = 'Mail Sent!';
	            }else{
	                $status = 'error';
	                $message = 'There was a problem in sending your message, please try again later';
	                
	            }
	        }else{
	            $status = 'error';
	            $message = $validate;  
	        }
	    }
        exit(json_encode(array(
            'status'    => $status,
            'message'   => $message
        )));
	}
	private function validate_form(){
	    $this->form_validation->set_rules('name', 'Name',array('trim','required','min_length[3]','max_length[100]'));
	    $this->form_validation->set_rules('email', 'Email',array('trim','required','valid_email','min_length[3]','max_length[100]'));
	    $this->form_validation->set_rules('phone', 'Phone',array('trim','required','min_length[5]','max_length[15]'));
	    if ($this->form_validation->run() == FALSE){
	        return validation_errors();
	    }
	    return true;
	}
	private function get_fields(){
	    if($this->input->method() == 'post'){
	       return array(
	            'name'      => set_value('name'),
	            'email'     => set_value('email'),
	            'phone'     => set_value('phone'),
	            'message'   => set_value('message'),
	            'url'       => set_value('url')
	       );
	    }
	}
	private function send_mail($to,$subject,$body,$cc=false,$bcc=false){
	    $this->email->initialize($this->_mail['config']);
        $this->email->from($this->from['email'], $this->from['name']);
        $this->email->to($to);
        if(!empty($cc)){
            $this->email->cc($cc);
        }
        if(!empty($bcc)){
            $this->email->cc($bcc);
        }
        $this->email->subject($subject);
        $this->email->message($body);
        return $this->email->send();
	}
}
