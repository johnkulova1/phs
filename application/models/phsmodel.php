<?php
class Phsmodel extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function register_user($json,$password,$email){
		$json=$this->db->escape($json);
		$password=md5($password);
		$data=array(
			'email'=>$email,
			'password'=>$password,
			'params'=>$json
			);
		$this->db->insert('users',$data);
	}
	function login_user($credentials){
		$query=$this->db->get_where("users", array('email'=>$credentials["email"], 'password'=>md5($credentials["password"])));
		$numrows=$query->num_rows();
		if($numrows>0){
			foreach($query->result_array() as $row){
				return $row['email'];
			}
		}
	}
	function save_application($arr){
		$result=$this->db->insert('applications',$arr);

		//Enter initial task which is checking::
		$status="pending";
		$data=array(
			'user_id'=>18,//Checking officer
			'application_id'=>$arr["application_no"],
			'status'=>'pending'
		);
		$result=$this->db->insert('tasks',$data);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	function get_applicant_applications(){
		$user=$this->session->userdata('user');
		$user_id=10;
		$result=$this->db->get_where('applications',array('user_id'=>$user_id));
		return $result;
	}
	function get_officer_applications($user_id){
		$sql="SELECT applications.application_no, applications.status, applications.date FROM applications, tasks WHERE tasks.user_id='".$user_id."' AND applications.application_no=tasks.application_id";
		$results=$this->db->query($sql);
		return $results;
	}
	function update_status($arr,$nextstep,$taskstatus,$remarks){
		if($this->session->userdata('user')!="inspectingofficer"){//For testing purposes
			$result=$this->db->insert('tasks',$arr);
			if($result){
				//Update the applications table status column to nextstep
				$sql="UPDATE applications SET status='".$nextstep."' WHERE application_no='".$arr["application_id"]."'";
				$r=$this->db->query($sql);
				//Update the tasks table status column to approved/query/pending/rejected
				$userid=$arr["user_id"]-1; //Change this the the id of the logged in user: This is for testing purposes.
				$sql="UPDATE tasks SET status='".$taskstatus."', remarks='".$remarks."' WHERE application_id='".$arr["application_id"]."' AND user_id='".$userid."'";
				$r=$this->db->query($sql);
				return true;
			}else{
				return false;
			}
		}else{
			
			//Update the applications table status column to nextstep
				$sql="UPDATE applications SET status='".$nextstep."' WHERE application_no='".$arr["application_id"]."'";
				$r=$this->db->query($sql);
				//Update the tasks table status column to approved/query/pending/rejected
				$userid=$arr["user_id"]-1; //Change this the the id of the logged in user: This is for testing purposes.
				$sql="UPDATE tasks SET status='".$taskstatus."', remarks='".$remarks."' WHERE application_id='".$arr["application_id"]."' AND user_id='".$userid."'";
				$r=$this->db->query($sql);
				return true;
		}
	}
	function getcertdata($app_no){
		$sql="SELECT * FROM applications WHERE application_no='".$app_no."'";
		$result=$this->db->query($sql);
		return $result;
	}
}
?>