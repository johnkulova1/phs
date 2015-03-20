<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Applicationview extends CI_Controller{
	public function index(){
		$this->load->view("applicationview_view");
	}
	public function get_officer_applications($userid){
		$this->load->model('phsmodel');
		$result=$this->phsmodel->get_officer_applications($userid);
		$data=array("appdata"=>$result->result_array());
		$this->load->view("dashboard_view", $data);
	}
	public function update_status(){
		$userid="";
		$user=$this->session->userdata('user');
		if($user=="applicant"){
			$this->get_applicant_applications();
		}
		if($user=="checkingofficer"){
			$userid=19;//next user userid
			$sts=$this->input->post('status');

			if($sts=="approve"){
				//update status on applications table to inspection
				$nextstep="inspection";
				$taskstatus="approved";
				$remarks=$this->input->post('remarks');
				$data=array(
				'user_id'=>$userid,
				'application_id'=>$this->input->post('app_no'),
				'status'=>"pending"
				);

				$this->load->model("phsmodel");
				$result=$this->phsmodel->update_status($data,$nextstep,$taskstatus,$remarks);
				$this->get_officer_applications(18);
			}
			if($sts=="Pending"){}
			if($sts=="Rejected"){}
			if($sts=="Query"){}

		}
		if($user=="verificationofficer"){
			$userid=20;//next user userid
			$sts=$this->input->post('status');
			if($sts=="approve"){
				$nextstep="certificate";
				$taskstatus="approved";
				$remarks=$this->input->post('remarks');
				$data=array(
				'user_id'=>$userid,
				'application_id'=>$this->input->post('app_no'),
				'status'=>"pending"
				);
				$this->load->model("phsmodel");
				$result=$this->phsmodel->update_status($data,$nextstep,$taskstatus,$remarks);
				$this->get_officer_applications(19);
			}
			if($sts=="Pending"){}
			if($sts=="Rejected"){}
			if($sts=="Query"){}
		
		}
		
	}
}