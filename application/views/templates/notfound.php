<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title><?php echo $title;?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> 
	    
	<link href="<?php echo base_url();?>/public/template1/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>/public/template1/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	
	<link href="<?php echo base_url();?>/public/template1/css/font-awesome.css" rel="stylesheet">
	    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
	    
	<link href="<?php echo base_url();?>/public/template1/css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>
	
	<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="index.html">
								
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					
					<li class="">						
						<a href="index.html" class="">
							<i class="icon-chevron-left"></i>
							Kembali
						</a>
						
					</li>
				</ul>
				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->



<div class="container">
	
	<div class="row">
		
		<div class="span12">
			
			<?php echo $body; ?>			
			
		</div> <!-- /span12 -->
		
	</div> <!-- /row -->
	
</div> <!-- /container -->


<script src="<?php echo base_url();?>/public/template1/js/jquery-1.7.2.min.js"></script>
<script src="<?php echo base_url();?>/public/template1/js/bootstrap.js"></script>
<script type="text/javascript">
function goBack() {
	window.history.back();
}
</script>
</body>

</html>
