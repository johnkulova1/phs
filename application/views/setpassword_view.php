<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Set password</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>

<body>
	<!--<div id="header">
	</div>-->
	<div id="content">
		<div style="margin-top: 30px;">
			<img src="<?php echo base_url(); ?>assets/images/court_of_arms.jpeg" width="100" height="100" style="margin-right:auto; margin-left:auto; display:block;" />
		</div>
		<div style="font-family:myriad; color:#97b704; font-size:18px; text-align:center; margin-top: 30px;">PORTHEALTH SERVICES</div>
		<div id="login_window">
			<div>
				<img src="<?php echo base_url(); ?>assets/images/login_icon.png" style="margin-left: auto;
    margin-right: auto; display: block;"/>
			</div>
			<?php
			echo form_open('setpassword/changepassord');
			?>
    		<div>
    			<?php
    				$data = array(
		              'name'        => 'password',
		              'id'          => 'password',
		              'placeholder' => 'Enter your password',
		              'maxlength'   => '100',
		              'size'        => '50',
		              'class'		=> 'textfieldstyle',
		              'style'		=> 'margin-bottom: 10px;'
		            );
					echo form_password($data);
    			?>
    		</div>
    		<div>
    			<?php
    				$data = array(
		              'name'        => 'veripassword',
		              'id'          => 'veripassword',
		              'placeholder' => 'Retype password',
		              'maxlength'   => '100',
		              'size'        => '50',
		              'class'		=> 'textfieldstyle',
		              'style'		=> 'margin-bottom: 10px;'
		            );
					echo form_password($data);
    			?>
    			
    		</div>
    		<div>
    			<a href="dashboard">
    			<?php
    				$data = array(
		              'name'        => 'changepassword_btn',
		              'id'          => 'changepassword_btn',
		              'value'       => 'Change password',
		              'class'		=> 'buttonstyle',
		              'style'		=> 'margin-top: 10px; height: 30px; width:120px;'
		            );
					echo form_submit($data);
    			?>
    			</a>
    		</div>
    		<?php
    			echo form_close();
    		?>

    		<div style="font-family:myriad; color:#97b704; font-size:12px; text-align:center; margin-top: 5%;">
    			Port Health Services Copyright 2015.
    		</div>
		</div>
	</div>
</body>
</html>