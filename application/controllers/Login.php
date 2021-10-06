<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

     public function index() { 
    	$data = array();
  		$data['controller_name']  = 'login';
  		$data['view']             = 'frontend/login';
  		$data['page_name']        = 'login';
  		$this->load->view("frontend/login",$data);
    }
}
?>
