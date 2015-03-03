<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Dashboard</title>
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
		              'value'       => 'Search for UCR here',
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
	</div>
	<div style="margin-top:10px; padding-left:10px; padding-right:10px;">
		<table width="100%" border="1" class="dashboardtable">
		  <tr style="background-color:#868686; color: #fff; height: 50px; text-align:center;">
		    <td>Reference No.</td>
		    <td>Approval status</td>
		    <td>UCR No.</td>
		    <td>Consign Type</td>
		    <td>Process Name</td>
		    <td>Date submitted</td>
		    <td>Approval history</td>
		  </tr>
		  <tr>
		    <td>MD201300HCDAEP0100000295</td>
		    <td>Approved pending eDoc Fee</td>
		    <td>0</td>
		    <td>Master Approval</td>
		    <td>EPA Permit and Consumer Consignment</td>
		    <td>06-06-2013 11:11:37</td>
		    <td><a href="#">view</a></td>
		  </tr>
		  <tr>
		    <td>CD201300HCDAEP0100000295</td>
		    <td>Rejected</td>
		    <td>UCR201300000201</td>
		    <td>Consignment</td>
		    <td>PVOC DOC TEST</td>
		    <td>06-06-2013 11:11:37</td>
		    <td><a href="#">view</a></td>
		  </tr>
		  <tr>
		    <td>MD201300HCDAEP0100000295</td>
		    <td>Approved pending eDoc Fee</td>
		    <td>0</td>
		    <td>Master Approval</td>
		    <td>EPA Permit and Consumer Consignment</td>
		    <td>06-06-2013 11:11:37</td>
		    <td><a href="#">view</a></td>
		  </tr>
		</table>
	</div>
</body>
</html>