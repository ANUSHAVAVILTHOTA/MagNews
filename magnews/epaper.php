<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>SAMAYAJYOTHI</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>
		<style>.pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
		</style>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	
		<!-- Header -->
		<header id="header">
			<!-- Top Header -->
			<div id="top-header">
				<div class="container">
					<div class="header-links">
						<ul>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Advertisement</a></li>
							<li><a href="#">Privacy</a></li>
							<li><a href="#"><i class="fa fa-sign-in"></i> Login</a></li>
						</ul>
					</div>
					<div class="header-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
						<a href="#" class="logo"><img src="./img/logo-img.png" alt=""></a>
					</div>
					<div class="header-ads">
						<img class="center-block" src="./img/ad-2.jpg" alt=""> 
					</div>
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="./img/logo-alt.png" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Sport</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Fashion</a></li>
							<li><a href="#">Music</a></li>
							<li><a href="#">Business</a></li>
 							<li><a href="student.php">Upload</a></li>
							<li><a href="epaper.php">Epaper</a></li>
						</ul>
					</nav>
					<div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header><br/></br>
		<!-- /Header -->
		<!--Paper-->
		
<div class="container">
<div class="row-12">
<?php
include("connection.php");
$sel_query="Select * from paperdetails;";
$result = mysqli_query($db,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
  <div class="col-md-6>
<b><?php echo $row["place"]; ?></b><br>
<b><?php echo $row["date"]; ?><br></b>
<embed src="upload/<?php echo $row["pdf"]; ?>" width="250px" height="250px" />
</div>
<div class="col-md-6>
</div>
<br>

<?php  } ?>
</div>
</div>
</br

		

		
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>
		

	</body>
</html>
