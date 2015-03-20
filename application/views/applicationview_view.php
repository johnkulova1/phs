<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Application view</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>

<body>
	<div class="header">
		<span>PORTHEALTH SERVICES</span>

		<span style="position:relative; left: 75%; font-size:12px;">
			<span>
				<img src="<?php echo base_url(); ?>assets/images/user_icon.png" />
			</span>
			<span>John Kulova</span>
		</span>
	</div>
	<div style="height:50px; width: 100%; padding-top:20px;">
		<span style="font-family:myriad; font-size: 20px; color: #9d9d9d; padding-left:1%;">
			<?php 
				$user=$this->session->userdata('user');
				if($user=="checkingofficer"){
			?>
				Document Verification
			<?php
				}
				if($user=="verificationofficer"){
			?>
				Consignment Inspection
			<?php
				}
				if($user=="inspectingofficer"){
			?>
				Export Health Certificate
			<?php
				}
			?>
		</span>	
	</div>
	<div style="height:250px; width:100%; background-color:#565656; font-family:myriad; font-size:13px; padding-left:16px; padding-top:10px;">
		<table width="100%" border="0" style="border:none; border-collapse:collapse;">
		  <tr style="height: 40px;">
		    <td style="color:#fff;">Application Ref No.:</td>
		    <td style="color:#ffe400">MD201300HCDAEP010000000156</td>
		  </tr>
		  <tr style="height: 40px;">
		    <td style="color:#fff;">Status</td>
		    <td style="color:#ffe400">Query</td>
		  </tr>
		  <tr style="height: 40px;">
		    <td style="color:#fff;">Application Date</td>
		    <td style="color:#ffe400">28/05/2013  19:16:26</td>
		  </tr>
		  <tr style="height: 40px;">
		    <td style="color:#fff;">Application version</td>
		    <td style="color:#ffe400">1</td>
		  </tr>
		  <tr style="height: 40px;">
		    <td style="color:#fff;">Permit Type</td>
		    <td style="color:#ffe400">Blanket Licence</td>
		  </tr>
		  <tr style="height: 40px;">
		    <td style="color:#fff;"></td>
		    <td style="color:#ffe400">Blanket Licence</td>
		  </tr>
		</table>
	</div>
	<div style="height: 200px; font-family:myriad; font-size:12px;">
		<div style="position:relative; font-family:myriad; height: 200px; width:50%; float: left;">
			<div style="margin-bottom: 10px; margin-left: 10px; margin-top: 10px; font-size:12px;">Documents</div>
			<div>
				<a href="http://localhost:8888/porthealth/assets/docs/certificate_of_origin.pdf">
					<img src="<?php echo base_url(); ?>assets/images/document.png" />
				</a>
				<a href="http://localhost:8888/porthealth/assets/docs/certificate_of_quality.pdf">
					<img src="<?php echo base_url(); ?>assets/images/document.png" />
				</a>
				<img src="<?php echo base_url(); ?>assets/images/document.png" />
				<img src="<?php echo base_url(); ?>assets/images/document.png" />
			</div>
		</div>
		<div style="position:relative; height: 200px; width:50%; float: right; padding-top: 10px;">
			Remarks
			<?php
			echo form_open('applicationview/update_status');
			?>
			<div style="margin-top: 10px;">
			<?php
				$data = array(
		              'name'        => 'remarks',
		              'id'          => 'remarks',
		              'type'		=> 'textarea',
		              'rows'   		=> '20',
		              'cols'        => '40',
		              'style'		=> 'margin-bottom: 10px; height: 100px; width: 400px;'
		           	 );
				echo form_input($data);
			?>
			</div>
			<div>
				<?php
					$options=array(
							'approve'=>'approve',
							'query'	=>'Query',
							'pending' =>'Pending',
							'reject' => 'Reject'	
						);
					echo form_dropdown("status",$options,"Status");
					echo form_hidden("app_no",$application_no=$this->input->get('app_no',true));
					
				?>
			</div>
			<?php
				$user=$this->session->userdata('user');
				if($user!="inspectingofficer"){
				$data = array(
		              'name'        => 'submit_btn',
		              'id'          => 'submit_btn',
		              'value'       => 'Submit',
		              'class'		=>	"buttonstyle",
		              'style'		=> 'position:relative; left: 0px; margin-top: 10px; background-color:#577627; color:#fff;'
		            );
				echo form_submit($data);
				}else{
			?>
			<a href="http://localhost:8888/porthealth/index.php/generate_certificate/?app_no=<?php echo $this->input->get('app_no',true); ?>">View certificate</a>
			<?php
			}	
			echo form_close();
			?>
		</div>
	</div>
</body>
</html>