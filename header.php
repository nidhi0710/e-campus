<?php
	require './model.php';
	session_start();
	if(!isset($_SESSION['user_email'])) {
		header("location:./register.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>E-LDCE</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/header.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- NAVIGATION BAR -->
	<nav class="navbar navbar-inverse" >
  		<div class="container-fluid">
    		<ul class="nav navbar-nav">
      			<li>
      				<a href="index.php">HOME</a>
      			</li>
      			<!--CLUBS-->
      			<li>
      				<a href="club.php">CLUB</a>
      				<!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#">CLUBS<span class="caret"></span></a>
        			<ul class="dropdown-menu">
			          <li><a href="#">CLUB 1</a></li>
			          <li><a href="#">CLUB 2</a></li>
			          <li><a href="#">CLUB 3</a></li>
			        </ul> -->
      			</li>
      			<!-- ACHIEVEMENTS -->
      			<li><a href="achievements.php">ACHIEVEMENTS</a></li>
      			<!-- LIBRARY-->
      			<li><a href="elibrary.php">e-LIBRARY</a></li>
      			<!--DEPARTMENTS-->
      			<li class="dropdown">
      				<a class="dropdown-toggle" data-toggle="dropdown" href="department.php">DEPARTMENTS<span class="caret"></span></a>
        			<ul class="dropdown-menu">
			          <li><a href="it_index.php">IT</a></li>
			          <li><a href="ec_index.php">EC</a></li>
			          <li><a href="cse_index.php">CSE</a></li>
			        </ul>
      			</li>
      			<!-- FACILITIES-->
      			<li class="dropdown">
      				<a class="dropdown-toggle" data-toggle="dropdown" href="#">FACILITIES<span class="caret"></span></a>
        			<ul class="dropdown-menu">
			          <li><a href="lost_found.php">LOST &amp FOUND</a></li>
			          <li><a href="canteen.php">CANTEEN</a></li>
			          <li><a href="query.php">QUERIES?</a></li>
			        </ul>
      			</li>
      			<!-- OLX -->
      			<li class="dropdown">
      				<a class="dropdown-toggle" data-toggle="dropdown" href="#">CAMPUS OLX<span class="caret"></span></a>
        			<ul class="dropdown-menu">
			          <li><a href="olx_new_post.php">POST AD</a></li>
			          <li><a href="olx_ad_display.php">SEARCH</a></li>
			        </ul>
      			</li>
      			<!-- HIRE A VEHICLE-->
      			<li class="dropdown">
      				<a class="dropdown-toggle" data-toggle="dropdown" href="#">HIRE A VEHICLE<span class="caret"></span></a>
        			<ul class="dropdown-menu">
			          <li><a href="forhire_new_post.php">POST</a></li>
			          <li><a href="forhire_display.php">SEARCH</a></li>
			        </ul>
      			</li>

    		</ul>
  		</div>
	</nav>

		<div style="border-bottom: #0EA300 solid 2px;">
			<div class="container">
				<div class="row" style="padding-top: 10px;">
					<div class="col-xs-6" align="left">
						<h4>Hello! <b><?php echo $_SESSION['user_name']; ?></b></h4>
							<?php 
								$type = $_SESSION['user_type'];
								if( $type == "AUTHORITY"){
							?>
								<a href="./create_blog.php" target="_blank" class="btn btn-primary" value="New Blog">New Blog</a>
							<?php } ?>					
					</div>

					<div class="col-xs-6" align="right">
						<form method="POST" action="./controller.php">
							<input type="submit" class="btn btn-danger" name="log_out_btn" value="Log Out">
						</form>
					</div>
				</div>
			</div>
		</div>
		<br><br>	