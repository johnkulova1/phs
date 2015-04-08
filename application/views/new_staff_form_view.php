<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#cancel_btn").click(function(){
			$("#overlay").animate({width:0},100).animate({height:0},100);
			$("#popup").css("visibility","hidden");
		});
	});
</script>
</head>

<body>
<?php
  echo form_open('new_staff/save_new_staff');
		$data=NULL;
    $data = array(
          'name'        => 'staff_names',
          'id'          => 'staff_names',
          'placeholder' => 'Full names',
          'maxlength'   => '100',
          'size'        => '50',
          'class'   => 'textfieldstyle',
          'style'   => 'margin-bottom: 10px;'
        );
    echo form_input($data);

		$data = array(
          'name'        => 'staff_email',
          'id'          => 'staff_email',
          'placeholder' => 'Email address',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);


		$data = array(
          'name'        => 'phone_number',
          'id'          => 'phone_number',
          'placeholder' => 'Phone number',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);
?>
<div>
	<span>
	<?php
		$data = array(
          'name'        => 'save_btn',
          'id'          => 'save_btn',
          'value'       => 'Save',
          'class'		=> 'buttonstyle',
          'style'		=> 'margin-top: 10px;'
        );
		echo form_submit($data);

    echo form_close();
	?>
	</span>
	<span>
	<?php
		$data = array(
          'name'        => 'cancel_btn',
          'id'          => 'cancel_btn',
          'value'       => 'true',
          'content'		=> 'Cancel',
          'class'		=> 'buttonstyle',
          'style'		=> 'margin-top: 10px;'
        );
		echo form_button($data);
	?>
	</span>
</div>
</body>
</html>