<!DOCTYPE html>
<html>
<html>
<head>
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
	  <a class="navbar-brand" data-toggle="modal" data-target="#accountModal">
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

		<section class="rankings">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6">
						<!--<h1 class="text-center mt-5 mb-2">Top Five</h1>

						<div id="topFiveCarousel" class="carousel slide" data-ride="carousel">
						  	<div class="carousel-inner">

						  		<?php

						  		require "includes/db_connect.php";


							    $sql = "SELECT * FROM profiles ORDER BY currentVotes DESC LIMIT 5";
							    $result = mysqli_query($conn, $sql);

							    if (mysqli_num_rows($result) > 0) {
							    	$topPosition = 1;
							        while($row = mysqli_fetch_assoc($result)) {
							        echo   '<div class="carousel-item';

							        if ($topPosition == 1) {
							        	echo " active";
							        }

							        echo '">
									      		<img src="img/' . $row["picture"] . '" class="d-block w-100" alt="...">
										    	<div class="carousel-caption">
										    		<div>
										    			<h1># ' . $topPosition . '</h1>
										        		<h4>' . $row["name"] . '</h4>
										    		</div>	
										    	</div>
									   		</div>';
										    $topPosition++;
							        }
							    } else {
							        echo "0 results";
							    }
						  		?>

						    	<div class="carousel-item active">
						      		<img src="img/img-1.jpg" class="d-block w-100" alt="...">
							    	<div class="carousel-caption">
							    		<div>
							    			<h1># 1</h1>
							        		<h4>Mufaro Kaseke</h4>
							    		</div>	
							    	</div>
						   		</div>
						  	</div>
							<a class="carousel-control-prev" href="#topFiveCarousel" role="button" data-slide="prev">
						    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    	<span class="sr-only">Previous</span>
						  	</a>
						  	<a class="carousel-control-next" href="#topFiveCarousel" role="button" data-slide="next">
						    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
						    	<span class="sr-only">Next</span>
						  	</a>
						</div>-->

						<h1 class="text-center mt-5 mb-2">Rankings</h1>
						
						<table id="rankingsTable" class="table table-hover">
						  <thead>
						    <tr>
						      <th scope="col">Picture</th>
						      <th scope="col">Name</th>
						      <th scope="col">Votes</th>
						      <th scope="col"><b>#</b></th>
						    </tr>
						  </thead>
						  <tbody>
						    <?php

								require "includes/db_connect.php";


							    $sql = "SELECT * FROM profiles ORDER BY currentVotes DESC";
							    $result = mysqli_query($conn, $sql);

							    if (mysqli_num_rows($result) > 0) {
							    	$position = 1;
							        while($row = mysqli_fetch_assoc($result)) {
							        echo    '<tr class="align-items-center">
										      <td><img src="img/' . $row["picture"] . '" class="profilePicture"></td>
										      <td>' . $row["name"] . '</td>
										      <td>' . $row["currentVotes"] . '</td>
										      <th scope="row">' . $position . '</th>
										    </tr>';
										    $position++;
							        }
							    } else {
							        echo "0 results";
							    }


						    ?>
						  </tbody>
						</table>

					</div>
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