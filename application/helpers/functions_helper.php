<?php
function url2breadcrumb($url,$include_base=1,$home_url=false){
    if(empty($url)){
        return;
    }
    $base = parse_url($url);
    $base = $base['scheme'].'://'.$base['host'].'/';
    $crumbs = rtrim(parse_url($url,PHP_URL_PATH),'_');  
    $crumbs = array_filter(explode("/",$crumbs));
    $link = '';
    $breadcrumbs = array();
    $exclude = array('.htm','.html','.php'); //will be deleted from crumb text
    $replace = array('-','_'); //will be replaced to whitespace
    foreach($crumbs as $crumb){

        //exclude home url
        if($home_url){
            $h = str_replace($base,'',$home_url);
            $h = ltrim($h,'/');
            $h = rtrim($h,'/');
            if($crumb == $h){
                continue;
            }
        }

        $link .= $crumb.'/';
        $text = str_replace($replace,' ',$crumb);
        $the_crumb = array(
            'text'=>ucwords(str_replace($exclude,'',$text)),
            'link'=>($include_base==1?$base:'').rtrim($link,"/")
        );
        $breadcrumbs[] = $the_crumb;
    }
    return $breadcrumbs;
}

function url2title($title){
    return preg_replace('/[^A-Za-z0-9-]+/', '-', $title);
}

function send_mail($to,$subject,$message,$from=array()){
    if(empty($to) || empty($subject) || empty($message)){
        return;
    }
    
    $CI =& get_instance();
    
    $CI->load->library('email');
    //$CI->config->load('mail');
    $CI->config->load('mail', FALSE, TRUE);
    $config = config_item('mail');
    $CI->email->initialize($config);
    $CI->email->from(
        !empty($from['email'])?$from['email']:$config['from_email'],
        !empty($from['name'])?$from['name']:$config['from_name']
    );
    
    if(!empty($from['reply_to'])){
        $CI->email->reply_to($from['reply_to']);
    }
    $CI->email->to($to);
    if(!empty($config['mail_cc'])){
        $CI->email->cc($config['mail_cc']);
    }
    if(!empty($config['mail_bcc'])){
        $CI->email->bcc($config['mail_bcc']);
    }
    $CI->email->subject($subject);
    $CI->email->message($message);
    $status = $CI->email->send();
    return $status;
}
function key2value($arr,$string){
    if(!is_array($arr)){
        return $string;
    }
    $search = array();
    $replace = array();
    foreach($arr as $key => $value){
        $search[] = '{'.$key.'}';
        $replace[] = nl2br($value);
    }
    return str_replace($search,$replace,$string);
}

function extract_urls($string){
    if(empty($string)){
        return;
    }
    preg_match_all('/https?\:\/\/[^\",]+/i', $string, $matches);
    return ($matches[0]);
}