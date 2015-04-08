<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Port Health Admin</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<script src="http://localhost:8888/porthealth/assets/js/jquery.js"></script>
<script src="http://localhost:8888/porthealth/assets/js/jquery-ui.js"></script>
</head>
<body>
	<div id="overlay" style="position:absolute; z-index:1; left:0; top:0; background-color:#000; opacity:.7;"></div>
	<div id="popup" style="position:absolute; padding-top:40px; border:1px solid #ccc; visibility:hidden; z-index:2; height: 600px; width: 600px; right:0; left:0; margin:auto; background-color:#FFF; top:10%; ">
	</div>
	<div class="header">
		<span>PORTHEALTH</span> <span style="color:#84c100;">SERVICES</span>
		
		<span style="position:relative; left: 70%; font-size:12px;">
			<span>
				<img src="<?php echo base_url(); ?>assets/images/user_icon.png" />
			</span>
			<span>John Kulova</span>
			<span style="margin-left: 5px;"><a style="color: #FFF;" href="http://localhost:8888/porthealth/index.php/login">Logout</a></span>
		</span>	
	</div>
	<div style="width: 100%; height: 700px;">
		<div style="postion:relative; width:18%; height: 700px; background-color:#4d4d4d; color:#dfdfdf; font-family:open sans; float:left;">
			<div style="font-size:16px; background-color:#dc4343; padding-top:5px; padding-bottom:5px; padding-left: 10px;">Users</div>
			<div style="font-size:14px; padding-left:20px;" id="staff_link"><a  style="color:#dfdfdf;" href="admin_dashboard/?user=staff">Staff</a></div>
			<div style="font-size:14px; padding-left:20px;"><a id="individuals" style="color:#dfdfdf;" href="admin_dashboard/?user=individuals">Individuals</a></div>
			<div style="font-size:16px; background-color:#dc4343; padding-top:5px;  padding-bottom:5px; padding-left: 10px;">Applications</div>
		</div>
		<div id="content" style="postion:relative; width:82%; height: 700px; background-color:#FFF; float:right;">
			<div style="font-family: open sans">
				<span><h3 class="page-title">Users <small>staff</small></h3></span>
				<span style="padding-left: 20px;">
					<input type="button" value="New" class="buttonstyle" style="left:0;" id="new" />
					<script>
						$("#new").click(function(){
							$("#overlay").animate({width:$(document).width()},100).animate({height:$(document).height()},100);
							$("#popup").load("http://localhost:8888/porthealth/index.php/new_staff").css("visibility","visible");
						});
					</script>
				</span>
			</div>
		</div>
	</div>
</body>
</html>