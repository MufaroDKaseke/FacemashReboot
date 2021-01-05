<!DOCTYPE html>
<html>
<html><head>
	<title>FaceMash Reboot</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	 <meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<meta content="" name="keywords">
  	<meta content="" name="description">

</head>

<body>


	

	<nav id="header" class="navbar navbar-expand-lg navbar-dark bg-dark py-2 px-5">
	  <a class="navbar-brand">
	  	<img src="img/logo.svg">
	  	<span class="d-none d-md-inline">Facemash</span>
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarText">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="./">Home</a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="login.php">Login</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="rankings.php">Rankings</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="latest.php">Latest</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="about.php">About</a>
	      </li>
	    </ul>
	  </div>
	</nav>

	<main>
		<section class="game">
			<div class="container-fluid">
				<div class="row justify-content-center align-items-center">
					<div class="col py-5 text-center">
						<h5>Where we let in for our look? No. We will be judged on them? Yes.</h5>
						<h4 class="font-weight-bold">Who's HOTTER? Click To Choose</h4>
					</div>
					
				</div>
				<div class="row justify-content-center align-items-center">

					<?php


					//Connect Database
					require "includes/db_connect.php";

					// Get Functions
					require "includes/functions.php";

					checkConnection();

					insertNewVote();

					$selectResults = selectRandomProfiles();

					getNewProfiles($selectResults['newFirstProfile'] , $selectResults['newSecondProfile']);

			
					// Close Database
					mysqli_close($conn);
					?>

























			<!--	<div class="col-lg-4">
						<div class="img-container d-flex justify-content-center align-items-center">
							<img src="img/img-1.jpg" class="second-img">
							<div class="text-center d-flex justify-content-center align-items-center">
								<div>
									<h2>Ben</h2>
								<form method="post">
									<input type="hidden" name="process" value="vote">
									<input type="hidden" name="current_votes" value="">
									<input type="hidden" name="pr_frstid" value="">
									<input type="hidden" name="pr_scndid" value="">
									<button type="submit" name="vote" value="" class="btn vote-btn fa fa-heart-o"></button>
								</form>
								</div>	
							</div>
						</div>
					</div>

					<div class="col-1 text-center">
						<h1>/</h1>
					</div>

					<div class="col-lg-4">
						<div class="img-container d-flex justify-content-center align-items-center">
							<img src="img/img-3.jpg" class="second-img">
							<div class="text-center d-flex justify-content-center align-items-center">
								<div>
									<h2>Behjhjhn Mrigadiarekhk</h2>
								<form>
									<button class="btn vote-btn fa fa-heart-o"></button>
								</form>
								</div>	
							</div>
						</div>
					</div>-->

				</div>
			</div>
		</section>
	</main>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="lib/wow.min.js"></script>
<script src="js/main.js"></script>


</body>
</html>