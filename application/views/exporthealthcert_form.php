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
  echo form_open('exporthealthcert/save');
		$data=NULL;
		$data = array(
          'name'        => 'consignee_name',
          'id'          => 'consignee_name',
          'placeholder' => 'Consignee Name',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'consignee_address',
          'id'          => 'consignee_address',
          'placeholder' => 'Consignee Address',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'flightvessel_number',
          'id'          => 'flightvessel_number',
          'placeholder' => 'Vessel/ Flight Number',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'shipping_marks',
          'id'          => 'shipping_marks',
          'placeholder' => 'Shipping Marks',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'invoice_number',
          'id'          => 'invoice_number',
          'placeholder' => 'Invoice Number',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'cd3_number',
          'id'          => 'cd3_number',
          'placeholder' => 'C.D. 3 Number',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'product_name',
          'id'          => 'product_name',
          'placeholder' => 'Product Name',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'quantity',
          'id'          => 'quantity',
          'placeholder' => 'Quantity',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'destination',
          'id'          => 'destination',
          'placeholder' => 'Place of Destination',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'exporter_name',
          'id'          => 'exporter_name',
          'placeholder' => 'Exporter Name',
          'maxlength'   => '100',
          'size'        => '50',
          'class'		=> 'textfieldstyle',
          'style'		=> 'margin-bottom: 10px;'
        );
		echo form_input($data);

		$data = array(
          'name'        => 'exporter_address',
          'id'          => 'exporter_address',
          'placeholder' => 'Exporter Address',
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