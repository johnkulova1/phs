<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<script src="http://localhost:8888/porthealth/assets/js/jquery.js"></script>
<script>
	$(document).ready(function(){
		$("#new_btn").click(function(){
			$("#overlay").animate({width:$(document).width()},100).animate({height:$(document).height()},100);
			$("#popup").css("visibility","visible");
		});
	});
</script>
</head>

<body>
	<div id="overlay" style="position:absolute; z-index:1; left:0; top:0; background-color:#000; opacity:.7;"></div>
	<div id="popup" style="position:absolute; border:1px solid #ccc; visibility:hidden; z-index:2; height: 600px; width: 600px; right:0; left:0; margin:auto; background-color:#FFF; top:10%; ">
		<div style="margin-top:10px;">
			<select id="document_type" class="textfieldstyle">
				<option value="exporthealthcert">Export Health Certificate</option>
				<option value="importClearancecert">Import Clearance Certificate</option>
			</select>
			<script>
				$("#document_type").change(function(){
					var doctype=$(this).val();
					if(doctype=="exporthealthcert"){
						$("#exportimportform").load("http://localhost:8888/porthealth/index.php/exporthealthcert");
					}
				});

			</script>
		</div>
		<div id="exportimportform" style="margin-top:10px;"></div>
	</div>
	<div class="header">
		<span>PORTHEALTH</span> <span style="color:#84c100;">SERVICES</span>
		<span style="position:relative; left: 70%; font-size:12px;">
			<span>
				<img src="<?php echo base_url(); ?>assets/images/user_icon.png" />
			</span>
			<span>John Kulova</span>
			<span><a style="color: #FFF;" href="http://localhost:8888/porthealth/index.php/login">Logout</a></span>
		</span>
	</div>
	<div style="padding-top: 20px; padding-left: 10px;">
		<span>
		<?php
			$options=array(
				'Export health certificate'=>'Export health certificate',
				'Import clearance certificate'=>'Import clearance certificate'
				);
			echo form_dropdown('Searchfilter', $options, 'Filter by');
		?>
		<span>
		<span>
			<?php
			$data = array(
		              'name'        => 'searchucr',
		              'id'          => 'searchucr',
		              'placeholder' => 'Search for UCR here',
		              'maxlength'   => '100',
		              'size'        => '50',
		              'style'		=> 'height:25px; padding-left:10px;'
		            );
			echo form_input($data);
			?>
		</span>
		<span id="approved" class="applicationstatus" style="margin-left:20px;">
			<a style="color:#71c36d; font-family:verdana;" href="#">Approved - 23</a>
		</span>
		<span id="pending" class="applicationstatus" style="margin-left:20px;">
			<a style="color:#746c6c; font-family:verdana;" href="#">Pending - 10</a>
		</span>
		<span id="rejected" class="applicationstatus" style="margin-left:20px;">
			<a style="color:#ff0000; font-family:verdana;" href="#">Rejected - 5</a>
		</span>
		<?php
		$user=$this->session->userdata('user');
		if($user=="applicant"){
		?>
		<span>
			<?php
				$data = array(
		              'name'        => 'new_btn',
		              'id'          => 'new_btn',
		              'value'       => 'true',
		              'class'		=> 'buttonstyle',
		              'style'		=> 'margin-top: 10px;',
		              'content'		=> 'New application'
		            );
				echo form_button($data);
			?>
		</span>
		<?php
		}
		?>
	</div>
	<div style="margin-top:10px; padding-left:10px; padding-right:10px;">
		<table width="100%" border="1" class="dashboardtable">
		  <tr style="background-color:#868686; color: #fff; height: 50px; text-align:center;">
		    <td>Application No.</td>
		    <td>Approval status</td>
		    <td>UCR No.</td>
		    <td>Type</td>
		    <td>Process Name</td>
		    <td>Date submitted</td>
		    <?php
		    	$user=$this->session->userdata('user');
		    	if($user!="applicant"){
		    ?>
		    <td>Approval history</td>
		    <?php
		    }
		    ?>
		  </tr>
		  <?php
		  foreach($appdata as $row){
		  ?>
		  <tr>
		    <td><?php  echo $row["application_no"]; ?></td>
		    <td><?php echo $row["status"]; ?></td>
		    <td>0</td>
		    <td>Export</td>
		    <td><?php echo $row["status"]; ?></td>
		    <td><?php echo $row["date"]; ?></td>
		    <?php
		    	$user=$this->session->userdata('user');
		    	if($user!="applicant"){
		    ?>
		    <td><a href="http://localhost:8888/porthealth/index.php/applicationview/?app_no=<?php echo $row["application_no"]; ?>">view</a></td>
		    <?php
		    	}
		    ?>
		  </tr>
		 <?php
		}
		 ?>
		</table>
	</div>
</body>
</html>