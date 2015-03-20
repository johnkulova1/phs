<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register extends CI_Controller{
	public function index(){
		$this->load->view("register_view");
	}
	public function registration(){
		$names=$this->input->post('names');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$idnumber=$this->input->post('idnumber');
		$address=$this->input->post('address');
		$password=$this->input->post('password');
		$verifypass=$this->input->post('verifypassword');
		$userlevel="applicant";
		$arr=array('names'=>$names, 'phone'=>$phone, 'idnumber'=>$idnumber,'address'=>$address,'userlevel'=>$userlevel);
		$json=json_encode($arr);
		$this->load->model('phsmodel');
		$this->phsmodel->register_user($json,$password,$email);
		$this->load->view('login_view');
	}
}