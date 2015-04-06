<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="<?php echo base_url();?>public/css/style.css" />
	<script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/global/scripts/highchart/highcharts.js"></script>
    <script src="<?php echo base_url() ?>assets/global/scripts/highchart/modules/exporting.js"></script>
	<style>
	/*a {
		width: 60px;
		text-decoration: none;
	}
	a.login {
		float: right;
	}
	li {
		display: inline; 
	}
	ul li a:hover, ul li a:focus {
		color:red;
		background-color: #ddffff;
	} 
	*/
	#navcontainer ul
	{
		margin: 0;
		padding: 0;
		list-style-type: none;
/* 		text-align: center; */
	}

	#navcontainer ul li { display: inline; }
	#navcontainer a.login { float: right; }
	#navcontainer ul li a
	{
		text-decoration: none;
/* 		padding: .2em 1em; */
		color: #fff;
		background-color: #036;
	}

	#navcontainer ul li a:hover
	{
		color: red;
		background-color: #ddffff;
	}

	</style>
</head>
<body>

<div id="container">

	<h1 style="margin: 0; padding: 0; background-color: #dddddd;">
		<div id="navcontainer">
		<ul style="margin: 0; padding: 0;list-style-type: none; ">
			<li>
				<a href="">Beranda</a>
			</li>
			<li>
				<a href="">Materi</a>
			</li>
			<li>
				<a href="">Download</a>
			</li>
			<?php 
			if($this->session->userdata('login') == TRUE) { 
			?>
			<li>
				<a class="login" href="home/logout">Logout</a>
			</li>
			<?php } ?>
		</ul>
		</div>
	</h1>
	<h1>
		Welcome to CodeIgniter!
	</h1>
	
	<div id="body">
	<?php echo $body; ?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>


</body>
</html>