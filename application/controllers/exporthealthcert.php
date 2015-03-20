<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Exporthealthcert extends CI_Controller{
	public function index(){
		$this->load->view("exporthealthcert_form");
	}
	public function save(){
		//FOR TESTING PURPOSES 
		$category_id=1;
		$user_id=10;
		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
		$application_no="";
		for ($i = 0; $i < 20; $i++) {
      		$application_no .= $characters[rand(0, strlen($characters) - 1)];
 		}
 		$arr=array(
 			'category_id'=>$category_id,
 			'user_id'=>$user_id,
 			'status'=>"checking", 
	 		'consignee_name'=>$this->input->post('consignee_name'),
	 		'consignee_address'=>$this->input->post('consignee_address'),
	 		'vessel_no'=>$this->input->post('flightvessel_number'),
	 		'shipping_marks'=>$this->input->post('shipping_marks'),
	 		'invoice_no'=>$this->input->post('invoice_number'),
	 		'cd3_no'=>$this->input->post('cd3_number'),
	 		'product_name'=>$this->input->post('product_name'),
	 		'quantity'=>$this->input->post('quantity'),
	 		'destination'=>$this->input->post('destination'),
	 		'exporter_name'=>$this->input->post('exporter_name'),
	 		'exporter_address'=>$this->input->post('exporter_address'),
	 		'application_no'=>$application_no
 		);
 		$this->load->model("phsmodel");
 		$result=$this->phsmodel->save_application($arr);
 		if($result){
 			$this->getApplications();
 		}

	}
	public function getApplications(){
		$this->load->model('phsmodel');
		$result=$this->phsmodel->get_applicant_applications();
		$data=array("appdata"=>$result->result_array());
		$this->load->view("dashboard_view", $data);
	}
}