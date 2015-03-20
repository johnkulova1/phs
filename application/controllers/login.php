<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
	public function index()
	{
		$this->load->view("login_view");
	}
	public function authenticate_user(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$credentials=array('email'=>$username, 'password'=>$password);
		$this->load->model("phsmodel");
		$result=$this->phsmodel->login_user($credentials);

		//Users : checkingofficer@gmail.com, verificationofficer@gmail.com, inspectingofficer@gmail.com
		$user=$result;
		if($username=="checkingofficer@gmail.com"){
			$user="checkingofficer";
		}
		if($username=="verificationofficer@gmail.com"){
			$user="verificationofficer";
		}
		if($username=="inspectingofficer@gmail.com"){
			$user="inspectingofficer";
		}
		if($username=="jhnkulova@gmail.com"){
			$user="applicant";
		}
		$data=array(
					'username'=>$username,
					'user'=>$user
				);
		$this->session->set_userdata($data);
		$user=$this->session->userdata('user');
		if($user=="applicant"){
			$this->getApplications();
		}
		if($user=="checkingofficer"){
			$userid=18;
			$this->get_officer_applications($userid);
		}
		if($user=="verificationofficer"){
			$userid=19;
			$this->get_officer_applications($userid);
		}
		if($user=="inspectingofficer"){
			$userid=20;
			$this->get_officer_applications($userid);
		}

	}
	public function getApplications(){
		$this->load->model('phsmodel');
		$result=$this->phsmodel->get_applicant_applications();
		$data=array("appdata"=>$result->result_array());
		$this->load->view("dashboard_view", $data);
	}
	public function get_officer_applications($userid){
		$this->load->model('phsmodel');
		$result=$this->phsmodel->get_officer_applications($userid);
		$data=array("appdata"=>$result->result_array());
		$this->load->view("dashboard_view", $data);
	}
}