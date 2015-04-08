<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class New_staff extends CI_Controller{
	function index(){
		$this->load->view('new_staff_form_view');
	}
	function save_new_staff(){
		$userlevel="staff";
		$email=$this->input->post("staff_email");
		$arr=array(
			'names'=>$this->input->post("staff_names"),
			'userlevel'=>$userlevel,
			'email'=>$email,
			'phone'=>$this->input->post("phone_number")
			);
		$this->load->model("phsmodel");
		$result=$this->phsmodel->save_staff($arr);
		if($result){
			$this->sendmail($email);
			$this->load->view("admin_dashboard_view");
		}
	}
	function sendmail($email){
				    $this->load->library('email');
				    $link="http://localhost:8888/porthealth/index.php/setpassword/?email=".$email;
		            $subject = 'Port Health Services account activation';
		            $message = "<p>Click on the link to set your password and activate your account.</p>";
		            $message .="<br /><a href=".$link.">activate</a>";

		            // Get full html:
		            $body =
		'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		    <title>'.htmlspecialchars($subject, ENT_QUOTES, $this->email->charset).'</title>
		    <style type="text/css">
		        body {
		            font-family: Arial, Verdana, Helvetica, sans-serif;
		            font-size: 16px;
		        }
		    </style>
		</head>
		<body>
		'.$message.'
		</body>
		</html>';
		            // Also, for getting full html you may use the following internal method:
		            //$body = $this->email->full_html($subject, $message);

		            $result = $this->email
		                ->from('port.health@yahoo.com')
		                ->reply_to('port.health@yahoo.com')    // Optional, an account where a human being reads.
		                ->to($email)
		                ->subject($subject)
		                ->message($body)
		                ->send();

		          //  var_dump($result);
		            // echo '<br />';
		            // echo $this->email->print_debugger();

		            exit;
	}

}