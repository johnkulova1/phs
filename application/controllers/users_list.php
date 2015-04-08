<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_list extends CI_Controller{
	function index(){	
		$this->load->view('users_list_view');
	}
	
}