<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}

	public function select( $lang ){
		$this->session->language = $lang;
		$url= $_SERVER['HTTP_REFERER'];
		redirect( $url );
	}
	
}
