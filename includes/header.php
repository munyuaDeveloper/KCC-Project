<?php 

require_once("database.php");

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Endarasha KCC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="asset\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset\css\animate.min.css">
	<link rel="stylesheet" type="text/css" href="asset\css\font-awesome\css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body id="myPage">
	<!----Header section
		=================================================================-->
	<section>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="index.php">ENDARASHA K.C.C</a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
			    <ul class="nav navbar-nav navbar-right">
			      <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
			      <li><a href="about.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a></li>
			      <li><a href="news.php"><i class="fa fa-book"></i> News</a></li>
			      <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Our Services
			        <span class="caret"></span></a>
			        <ul class="dropdown-menu">
			          <li><a href="service.php">Service 1</a></li>
			          <li><a href="service.php">Service 2</a></li>
			          <li><a href="service.php">Service 3</a></li>
			          <li><a href="service.php">Service 4</a></li>
			          <li><a href="service.php">Service 5</a></li>
			        </ul>
			      </li>

			      <?php
			      if(@$_SESSION['email']){
			      	echo "<li><a href='account.php' ><span class='glyphicon glyphicon-user'></span> My Account</a></li>";
			      }else{
			      	echo' <li><a href="" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> My Account</a></li>';
			      }
		         ?> 
			      <li><a href="contact.php"><i class="fa fa-envelope"></i> Contact </a></li>
			      <?php 
			      	if (@$_SESSION['email']) {
			      		echo '<li><a href="logout.php" name="log"> Logout <span class="glyphicon glyphicon-log-out"></span> </a></li>';
			      	}else{
			      		echo '<li><a href="" data-toggle="modal" data-target="#myModal" name="log"> Login <span class="glyphicon glyphicon-log-in"></span> </a></li>';
			      	}
			      ?>
			      
			    </ul>
			</div>
		  </div>
		</nav>
		
	</section>
