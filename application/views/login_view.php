<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>

<body>
	<!--<div id="header">
	</div>-->
	<div id="content">
		<div style="font-family:arial; color:#97b704; font-size:18px; text-align:center; margin-top: 100px;">PORTHEALTH SERVICES</div>
		<div id="login_window">
			<div>
				<img src="<?php echo base_url(); ?>assets/images/login_icon.png" style="margin-left: auto;
    margin-right: auto; display: block;"/>
			</div>
    		<div>
    			<?php
    				$data = array(
		              'name'        => 'username',
		              'id'          => 'username',
		              'value'       => 'Enter your username',
		              'maxlength'   => '100',
		              'size'        => '50',
		              'class'		=> 'textfieldstyle',
		              'style'		=> 'margin-bottom: 10px;'
		            );
					echo form_input($data);
    			?>
    		</div>
    		<div>
    			<?php
    				$data = array(
		              'name'        => 'password',
		              'id'          => 'password',
		              'value'       => 'Password',
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
		              'name'        => 'login_btn',
		              'id'          => 'login_btn',
		              'value'       => 'Login',
		              'class'		=> 'buttonstyle',
		              'style'		=> 'margin-top: 10px;'
		            );
					echo form_submit($data);
    			?>
    			</a>
    		</div>
    		<div style="margin-top:10px;">
    			<a style="position:relative; left:7.5%; color:#F00; font-family:arial; font-size:12px;" href="#">Forgotten password</a>
    		</div>

    		<div style="font-family:arial; color:#97b704; font-size:12px; text-align:center; margin-top: 8%;">
    			Port Health Services Copyright 2014.
    		</div>
		</div>
	</div>
</body>
</html>