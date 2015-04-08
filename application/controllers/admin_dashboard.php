<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_dashboard extends CI_Controller{
	function index(){
		$user=$this->input->get("user");
		$this->load->view('admin_dashboard_view');
	}

}