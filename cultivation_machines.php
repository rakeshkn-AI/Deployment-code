<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysql_query($sql_p);
		if(mysql_num_rows($query_p)!=0){
			$row_p=mysql_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
<aline
	    <title>Farmers Friend|| Home </title>
		  <p id="slogan"> By Rakesh</p>
		

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/green.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

	</head>
    <body class="cnt-home">
	
		
	
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/menu-bar.php');?>
	<?php include('includes/top-header.php');?>

</header>

<body>
<div class="container">
    <hr><h3>Mahindra   delearship 
	<p> contact (9845071227)</p></h3><hr>
     <div class="row">
        <div class="col-md-6">
         <img src="images/m.jpg">
        </div>
         
         <div class="col-md-6">
        <p>Mahindra Walk Behind Rice Transplanter</p>
         <p>*  Get Latest Price</p>
         <p>* Fuel Tank Capacity 	3.5 L</p>
        <p> *  Weight 	180 Kg</p>
         <p>* Brand 	Mahindra</P>
         <p>*  Displacement 	196 CC</p>
         <p>* Fuel 	Petrol</p>
         <p>* HP 	5 </p>
                 <div class="container">
				 
				</div>
				</div>
				</div>
				
				<div class="container">
    <hr><h3>Mahindra</h3><hr>
     <div class="row">
        <div class="col-md-6">
         <img src="images/mahindra-245-di-tractor-500x500.jpg">
        </div>
         
         <div class="col-md-6">
        <p>Mahindra 245 Di Tractor</p>
         <p>*Brand 	Mahindra</p>
         <p>* Fuel Tank Capacity 	25 Litre</p>
        <p> *  Brake Type 	Oil Immersed Brakes</p>
         <p>*Cooling System 	Water Cooled</P>
         <p>*  Rated Rpm 	1800</p>
         <p>* Fuel 	disele</p>
         <p>* HP 	20s </p>
                 <div class="container">
				 
				</div>
				</div>
				</div>
				 <hr><h3>Spring Loaded Cultivator</h3><hr>
     <div class="row">
        <div class="col-md-6">
         <img src="images/spring-loaded-cultivator-500x500.jpg">
        </div>
         
         <div class="col-md-6">
        <p>Material 	Cast Iron </p>
         <p>*Weight 	215 Kg. (Approx.) </p>
         <p>* Anchor Pin 	25 mm </p>
        <p> * Height 	533 mm </p>
         <p>*Length 	2000 mm </P>
         <p>*  Main Frame 	75x40 mm (Channel) </p>
         <p> </p>
         <p> </p>
                 <div class="container">
				
		</div>
		</div>
		</div>
		 <hr><h3>Mild Steel Mahindra Rotavator</h3><hr>
     <div class="row">
        <div class="col-md-6">
         <img src="images/mahindra-rotavator-500x500.jpg">
        </div>
         
         <div class="col-md-6">
        <p>Material 	Cast Iron </p>
         <p>*Weight 	850 Kg. (Approx.) </p>
         <p>* Anchor Pin 	25 mm </p>
        <p> * Height 	333 mm </p>
         <p>*Length 	2000 mm </P>
         <p>*  Main Frame 	75x40 mm (Channel) </p>
         <p> </p>
         <p> </p>
                 <div class="container">
				
		</div>
		</div>
		</div>
		 <hr><h3>Mahindra Cultivator</h3><hr>
     <div class="row">
        <div class="col-md-6">
         <img src="images/mahindra-cultivator-500x500.png">
        </div>
         
         <div class="col-md-6">
        <p>Material 	Cast Iron </p>
         <p>*Weight 	300 Kg. (Approx.) </p>
         <p>* Anchor Pin 	15 mm </p>
        <p> * Height 	533 mm </p>
         <p>*Length 	2000 mm </P>
         <p>*  Main Frame 	75x40 mm (Channel) </p>
         <p> </p>
         <p> </p>
                 <div class="container">
</html>