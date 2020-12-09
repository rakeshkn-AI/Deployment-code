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

		
				<!-- ================================== TOP NAVIGATION ================================== -->
	
<body>
<div class="container">
    <hr><h3> Main Cultivation </h3><hr>
	<title> south indian </title>
     <div class="row">
        <div class="col-md-6">
        
        </div>
         
         <div class="col-md-6">

                 <div class="container">
				 
				</div>
         </div>
     </div>
    <hr><h3>Paddy</h3><hr>
    <div class="row">
        <div class="col-md-6">
		            <img src="images/1paddy.jpg">
        </div>
        <div class="col-md-6">
			<p>A paddy field is a flooded parcel of arable land used for growing semiaquatic rice.</p>
			<p>Paddy cultivation should not be confused with cultivation of deepwater rice, which is grown in flooded conditions with water more than 50 cm (20 in) deep for at least a month</P>
			
        </div>
	  </div> 
	<div class="container">
    <hr><h3>Ragi </h3><hr>
     <div class="row">
        <div class="col-md-6">
         <img src="images/ragi.jpg">
        </div>
         
         <div class="col-md-6">
            <p>Ragi. Ragi is suited for cultivation in areas with annual rainfall of 700-1200mm. it does not tolerate heavy rainfall and requires a dry spell at the time of grain ripening.
			It grows well in altitudes of 1000-2000m with average temperature of 27oC. Ragi is cultivated mostly in red lateritic soils.</p>
                 <div class="container">
				 
				</div>
         </div>
     </div>
    <hr><h3>Maize</h3><hr>
    <div class="row">
        <div class="col-md-6">
		            <img src="images/167236-004-AE764A76.jpg">
        </div>
        <div class="col-md-6">
			<p>In India, Maize is grown throughout the year. It is predominantly a kharif crop with 85 per cent of the area under cultivation in the season. Maize is the third most important cereal crop in India after rice and wheat. It accounts for around 10 per cent of total food grain production in the country.</p>
        </div>
	  </div> 
	  <hr><h3>Wheat</h3><hr>
    <div class="row">
        <div class="col-md-6">
		            <img src="images/weat.jpg">
        </div>
        <div class="col-md-6">
			<p>Wheat is the main cereal crop in India. The total area under the crop is about 29.8 million hectares in the country. The production of wheat in the</p>
	  </div> 
	