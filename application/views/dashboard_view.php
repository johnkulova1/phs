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
		              'size'        => '50'
		            );
			echo form_input($data);
			?>
		</span>
	</div>
	<div>

	</div>
</body>
</html>