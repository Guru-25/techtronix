<?php 
  include('server.php') 

?>

<!DOCTYPE html>
<html>
<head>
	<title>DiabeTrack Login</title>
	<link rel="stylesheet" type="text/css" href="style.css"> </link> 
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
    	.header{
    		background-color: #5cd65c;
    		height: 70px;
    		width:400px;
    	}
    	.name{
    		color: #5cd65c;
    		font-size: 60px;
    	}

    	#fther1{
    		width: 100%;
    		height: 200px;
    		position: relative;
    		margin-top: 20px;
    	}
    	#chld1{
    		width: 200px;
    		height: 200px;
    		position:absolute;
    		float: right; 
    	}
    	#smchild2{
    		width: 400px;
    		height: 300px;
    		position:absolute;
    		margin-top: 23px;
    		 margin-left: 500px;
    	}
    	#lgn{
    		margin-left: 483px;


    	}
    	#lgn1{
    		width: 360px;
    	}
    	.btn{
    		background-color:#5cd65c;
    		color: #5cd65c; 
    	}
    	#sgn:hover{
    		color:#5cd65c;
    	}
    </style>


</head>
<body>
      <div id="fther1">

       	  <div id="chld1">
	       <img src="images/logo2.jpg"/>
          </div>
	    
	      <div id="smchild2">
	       <center><font   size="500"  class="name"> DiabeTrack </font> </center>
	       </div>

	  </div>
	  <br>
	
	<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				
						<a class="brand" href="contact.php"></a>
					<a class="brand" href="contact.php"></a>
					<a class="brand" href="contact.php"></a>
					<a class="brand" href="contact.php"></a>
					<a class="brand" href="contact.php"></a>
					

				<a class="brand" href="index2.php" ><i class="fa fa-home" aria-hidden="true"></i>&nbsp;HOME</a>
				
				
				
				
			
				<a class="brand" href="contact.php">CONTACT US</a>
				
				
				
				<a class="brand" href="about.php">ABOUT US</a>
				<a class="brand" href="Admin.php">ADMIN LOGIN</a>
				<a class="brand" href="Admin.php">DOCTOR LOGIN</a>
				</div>
			</div>
		</div>
 
 
 



	<div class="header">





		<h2>Login</h2>
	</div>


	
<div id="lgn">

	<form method="post" action="login.php" id="lgn1" autocomplete="off">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Enter username here">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Enter password here">
		</div>
		
		<div class="input-group">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php" id="sgn">Sign up</a>
		</p>
	</form>

</div>
 <footer >
		<div class="f1">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; 2024  DiabeTrack</p>
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
		</footer>


</body>
</html>