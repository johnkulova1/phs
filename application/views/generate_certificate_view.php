<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Certificate generation</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
	tinymce.init({selector:'textarea'});
</script>
</head>

<body>
	<div class="header">
		<span></span>
		<span>PORTHEALTH SERVICES</span>
		<span style="position:relative; left: 75%; font-size:12px;">
			<span>
				<img src="<?php echo base_url(); ?>assets/images/user_icon.png" />
			</span>
			<span>John Kulova</span>
		</span>
	</div>
	<div style="font-family:myriad; text-align: center; font-size: 20px; margin-top: 20px; margin-bottom: 20px;">
		Export Health Certificate
	</div>
	<div style="padding: 10px;">
		Payment status: 
		<?php
			$data = array(
		              'name'        => 'paymentstatus',
		              'id'          => 'paymentstatus',
		              'value'       => 'Paid',
		              'maxlength'   => '100',
		              'size'        => '50',
		              'style'		=> 'margin-bottom: 10px; width: 400px; height: 25px; margin-left: 10px;',
		              'readonly'	=> 'readonly'
		            );
			echo form_input($data);
		?>
	</div>
	<div style="padding: 10px; font-family:'Times New Roman';">
		<?php
			foreach($certdata as $rows){
		?>
		<textarea style="height: 600px;">
			<div style="text-align:center; font-size:20px;">REPUBLIC OF KENYA</div>
			<div style="font-size: 15px;">ORIGINAL</div>
			<div style="text-align:center; font-size:20px;">MINISTRY OF HEALTH</div>
			<div>
				<span style="font-size:15px; width: 30%; margin-right: 35%; height:500px;">0028223</span>
				<span style="width: 30%; margin-right: 25%;"><img src="<?php echo base_url(); ?>assets/images/court_of_arms.jpeg" /></span>
				<span style="width: 15%;">
					Date: <?php echo $rows["date"]; ?>
				</span>
			</div>
			<div style="text-align: center; margin-top: 20px; margin-bottom: 20px; font-size: 25px;">
				EXPORT HEALTH CERTIFICATE
			</div>
			
			<div style="margin-bottom:10px;">
				<table width="100%">

				  <tr>
				    <td>Serial Number</td>
				    <td><?php echo $rows["application_no"];?></td>
				  </tr>
				  <tr>
				    <td>Consignee Name</td>
				    <td><?php echo $rows["consignee_name"];?></td>
				  </tr>
				  <tr>
				    <td>Consignee Address</td>
				    <td><?php echo $rows["consignee_address"];?></td>
				  </tr>
				  <tr>
				    <td>Vessel/Flight Number</td>
				    <td><?php echo $rows["vessel_no"];?></td>
				  </tr>
				  <tr>
				    <td>Shipping Marks</td>
				    <td><?php echo $rows["shipping_marks"];?></td>
				  </tr>
				  <tr>
				    <td>Invoice Number</td>
				    <td><?php echo $rows["invoice_no"];?></td>
				  </tr>
				  <tr>
				    <td>C.D. 3 Number</td>
				    <td><?php echo $rows["cd3_no"];?></td>
				  </tr>
				  <tr>
				    <td>Product Name</td>
				    <td><?php echo $rows["product_name"];?></td>
				  </tr>
				  <tr>
				    <td>Quantity</td>
				    <td><?php echo $rows["quantity"];?></td>
				  </tr>
				  <tr>
				    <td>Place of Destination</td>
				    <td><?php echo $rows["destination"];?></td>
				  </tr>
				  <tr>
				    <td>Exporter's Name and Address</td>
				    <td><?php echo $rows["exporter_name"];?></td>
				  </tr>
				  <tr>
				    <td>Exporter's Address</td>
				    <td><?php echo $rows["exporter_address"];?></td>
				  </tr>
				</table>
			<?php
			}
			?>
			</div>
			<div>
				This is to certify that the above consignment was inspected on <!-- Put the inspection date here -->and found fit for human consumption.
				The food product was manufactured and packed in premises licensed under the Food, Drugs and Chemical Substances (Food Hygiene) Regulations, 1978. 
			</div>
			<div style="margin-top: 20px;">
				<table width="100%">
				  <tr>
				    <td>Current License No.</td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td>Issued by (Office)</td>
				    <td>&nbsp;</td>
				  </tr>
				  <tr>
				    <td>Expired on</td>
				    <td>&nbsp;</td>
				  </tr>
				</table>
			</div>
			<div style="margin-top: 20px;">
				This certificate is only valid for the above named article(s).
			</div>
			<div style="text-align:center;">Health Authority</div>
			<div>Fee Ksh 1500</div>
			<div>M.R. Number............</div>
			
		</textarea>
	</div>
	<?php
	echo form_open("generate_certificate/generate_cert_pdf");
	?>
	<div>
		<?php
			$data = array(
		              'name'        => 'remarks',
		              'id'          => 'remarks',
		              'value'       => 'Remarks',
		              'maxlength'   => '100',
		              'size'        => '50',
		              'style'		=> 'margin-bottom: 10px; width: 400px; height: 100px; margin-left: 10px; padding-left:10px;',
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
					'reject' => 'Reject',
					'style'=>'margin-left: 30px;'	
				);
			echo form_dropdown("status",$options,"Status");
			echo form_hidden("app_no",$application_no=$this->input->get('app_no',true));
			
		?>
	</div>
	<div>
		<?php

    		$data = array(
		              'name'        => 'cert_btn',
		              'id'          => 'cert_btn',
		              'value'       => 'Submit',
		              'class'		=> 'buttonstyle',
		              'style'		=> 'margin-top: 10px;'
		            );
			echo form_submit($data);	
		?>
	</div>
	<?php

	?>
</body>

</html>