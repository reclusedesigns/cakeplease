<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Cake Please</title>
	<meta name="author" content="Recluse">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- vendor files -->
	<link rel="stylesheet" href="design/vendor/bootstrap/css/bootstrap.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="design/vendor/bootstrap/css/bootstrap-responsive.css" type="text/css" media="screen" charset="utf-8">
	<link rel="stylesheet" href="design/vendor/fontello/css/fontello.css" type="text/css" media="screen" charset="utf-8">
	
	
	<!-- muay styles -->
	<link rel="stylesheet" href="design/css/layout.css" type="text/css" media="screen" charset="utf-8">
	
	<!-- the javascriptage -->
	<script src="design/vendor/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="design/vendor/bootstrap/js/bootstrap.js" type="text/javascript" charset="utf-8"></script>
	<script src="design/scripts/toys.js" type="text/javascript" charset="utf-8"></script>
	<script src="design/vendor/scrollto.js" type="text/javascript" charset="utf-8"></script>
	
	<!-- typekit! -->
	<script type="text/javascript" src="//use.typekit.net/ldx1tid.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	
</head>
<body>



	<!-- Navbar
	================================================== -->
	
	<div class="navbar navbar-static-top">
		<?php $full_name = $_SERVER['PHP_SELF']; $name_array = explode('/',$full_name); $count = count($name_array); $page_name = $name_array[$count-1];?>
		<div class="navbar-inner">
			<div class="container">
			
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</a>
			
				<a class="brand" href="index.php"><img src="design/images/header/logo.png" alt="logo"></a>
				
				<!-- Everything you want hidden at 940px or less, place within here -->
				<div class="nav-collapse collapse">
					<ul class="nav pull-right">
					<li class="<?php echo ($page_name=='cakes.php')?'active':'';?>"><a href="cakes.php">Cakes</a></li>
		      <li class="<?php echo ($page_name=='parties.php')?'active':'';?>"><a href="parties.php">Parties</a></li>
		      <li class="<?php echo ($page_name=='kits.php')?'active':'';?>"><a href="kits.php">Kits</a></li>
		      <li><a href="#contact" class="contact_link scrollto_js">Contact</a></li>
				</ul>
				</div>
			
			</div>
		</div>
	</div>
	
	