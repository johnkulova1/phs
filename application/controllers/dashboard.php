<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function index(){
		$this->getApplications();
	}

	public function getApplications(){
		$this->load->model('phsmodel');
		$result=$this->phsmodel->get_applications();
		$data=array("appdata"=>$result->result_array());
		$this->load->view("dashboard_view", $data);
	}
	
}