<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Nasa Images</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style>
			#search{
				margin-top:10%;
				margin-left:27%;
			}
			#search input[type=text]{
				width:500px;



			}
	</style>
	</head>
	<body>
		
		
		 	<div class='container' id="search">
		 		<h1  class="text-secondary ">Get NASA's Image Of The Day !</h1>
		 		<form method="get" action="index.php">
		 	<div class="form-group mt-5 ">
		 		 <input style="width:500px;" class="form-control" type="date" name="date" id="">
		 	</div>
		    
		 	<button  style="width:500px" class="btn btn-primary  ">Get</button>	
		 		</form>
		 	
		 	</div>
		 	<?php 
		 	if (isset($_GET['date'])) {
		 
		 	$date=$_GET['date'];
		 	$json=file_get_contents('https://api.nasa.gov/planetary/apod?hd=true&date='.$date.'&api_key=2433N2pWaUuVnzqcu0QF7Tjy8FpakB7zL1JHnDF2');
		 	$results=json_decode($json,TRUE);

		 	echo "  
<div class='container p-5 bg-light rounded mt-5'>
			<img class='img-thumbnail' src='".$results['hdurl']."' width='100%' height='50%' alt=''>
			<h3 class='mt-3 text-center'>".$results['title']."</h3>
			<p>
				".$results['explanation']."
			</p>
			";if (isset($results['copyright'])) {echo "<p><b>Photographer</b> :".$results['copyright'];}

			echo"</p>
			<p><b>Date</b> :".$results['date']."</p>
		</div>


		 	";

		 	
		 	

		 	
		 	

}

		 	?>
		
		







		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script></body>
</html>