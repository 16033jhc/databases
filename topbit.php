<!DOCTYPE html>

<html lang="en">

<?php

	session_start();
	include("config.php");

	$dbconnect=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

	if(mysqli_connect_errno()) {
	echo "Connection failed:".mysqli_connect_error();
	exit;
	}
		?>

	<head>
		<meta charset="utf-8">
		
		<!-- For assessment you need to change these -->
		<meta name="description" content="games, pokemon">
		<meta name="keywords" content="Pokemon Database">
		<meta name="keywords" content="games, pokemon. database">
		
		
		<title>Pokémon Database</title>
		<!-- for multiple fonts change | to %7c * no spaces* -->
		<link href="http://fonts.googleapis.com/css?family=Lato%7cUbuntu"
		rel="stylesheet">
		
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/data_style.css"> <!--custom style sheet -->
	</head>
	
	<body>
		<p class="message">Eek! Your browser does not support grid. 
		Please upgrade your system.</p>
		
		<div class="wrapper">
			
			<!-- logo / small image goes here -->
			<div class="box logo">
				<a href="index.php"><img src="images/logo.png"
				width ="150"
				height="150"
				alt="Pokéball" /></a>
			</div>
			
			<div class="box banner">
				<h1>Pokémon Database</h1>
			</div> <!-- / banner -->