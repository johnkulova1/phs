<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
</head>

<body>
		<div id="content">
		<div style="font-family:myriad; color:#97b704; font-size:18px; text-align:center; margin-top: 100px;">PORTHEALTH SERVICES</div>
		<div id="login_window" style="height: 420px;">
			<div style="text-align: center; font-family:myriad; font-size: 18px; margin-top:30px;">
				Registration form
			</div>
			<?php
			echo form_open('register/registration');
			?>
    		<div>
    			<?php
    				$data = array(
		              'name'        => 'names',
		              'id'          => 'names',
		              'placeholder' => 'Names',
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
		              'name'        => 'email',
		              'id'          => 'email',
		              'placeholder' => 'Email',
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
		              'name'        => 'phone',
		              'id'          => 'phone',
		              'placeholder' => 'Phone',
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
		              'name'        => 'idnumber',
		              'id'          => 'idnumber',
		              'placeholder' => 'ID Number',
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
		              'name'        => 'address',
		              'id'          => 'address',
		              'placeholder' => 'Address',
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
		              'placeholder' => 'Password',
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
		              'name'        => 'verifypassword',
		              'id'          => 'verifypassword',
		              'placeholder' => 'Verify Password',
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
		              'name'        => 'register_btn',
		              'id'          => 'register_btn',
		              'value'       => 'Register',
		              'class'		=> 'buttonstyle',
		              'style'		=> 'margin-top: 10px;'
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