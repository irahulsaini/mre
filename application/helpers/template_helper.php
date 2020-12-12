<?php
defined('BASEPATH') or exit('No direct access allowed');
function template_url($url=false){
    $url = rtrim($url,'/');
    $url = ltrim($url,'/');
    return base_url('views/'.$url);
}
function get_head($data=array()){
	get_template('inc/head',$data);
}
function get_footer($data=array()){
	get_template('inc/footer',$data);
}
function get_template($name,$data=array(),$echo=true){
	if(empty($name)){
		return;
	}
	global $view_folder;
	$CI =& get_instance();
	$CI->load->config('cms_config');
	if(!file_exists($view_folder)){
		exit('There was a problem in loading theme please try again or contact website admin.');
	}
	if($echo == true){
		$CI->load->view($name,$data);
	}else{
		return $CI->load->view($name,$data,true);
	}
}