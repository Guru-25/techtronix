<?php 
	session_start(); 
	

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor Login</title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta  http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1,user-scalable=0"/>
    <meta name="description" content="global"/>
    <meta name="distribution" content="global"/>
    <meta http-equiv="X-UA-compatible" content="IE=edge,chrome=1"/>
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
       <style type="text/css">
       	.r1:hover ,.r2:hover ,.r3:hover ,.r4:hover ,.r5:hover ,.r6:hover 
       	{
           opacity:0.8;
       	}
       	#title{
       		color: #00cc44;
       	}
       	#bdy{
	               width:100%;
                   background-image:url(C:\xampp\htdocs\RNGClinic\images\back.jpg);	
    		 }
    	.text-right .text-info	{
    		color:#00cc44;
    	} 
       </style>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:150px;">
				<img src="images/logo2.jpg"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			
				<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "<b>Welcome,</b>".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?><br><br><br>
			     <a href="index2.php?logout='1'" class="btn btn-success" >Logout</a> 
				
								
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href="#" id="title">My Fitness</a>
			</div>
			</div>
		</div><br><br>

		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >

					<a class="brand" href="contact2.php"></a>
					<a class="brand" href="contact2.php"></a>
					<a class="brand" href="contact2.php"></a>
					<a class="brand" href="contact2.php"></a><a class="brand" href="contact2.php"></a>
				<a class="brand" href="doctorlogin.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				
				
				
				<a class="brand" href="contact3.php">CONTACT</a>
				
				<a class="brand" href="about3.php">ABOUT US </a>
				

				
				
				
			


				
				</div>
			</div>
		</div>
		
		<div>
			
			<div class="content">
		<h1 style="display: block;">
		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Hello <strong><?php echo $_SESSION['username']; ?></strong></p>
			
		<?php endif ?>
	</div>
			<h3>Welcome To MyFitness!</h3>
			<h3> Please Click on the Appointments button to View Appointments</h3>
			<center><h1><a href="viewappoint.php" class="btn btn-success" > View Appointments</a> <br> </center>

			               
      </div>
<footer >
		<div class="f1">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2024  My Fitness</p>
			</div>
			<div style="float:right;">
			<p class="text-right text-info">
				<span><a style="border-right: 2px solid " href="Admin/adminlogin.php" target="_blank"><b>Admin</b>&nbsp;&nbsp;</a></span>
			 Follow On:
				<span><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter " aria-hidden="true"></i></a></span>&nbsp;
				<span><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
</p>
			</div>
		</div>
		</footer>	</div>
	
		
</body>
</html>