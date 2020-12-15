<?php

//Database Connection
session_start();
$con = mysqli_connect("localhost", "root", "", "complaindb"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

// Declaring variables to prevent errors
$type = "";
$date_of_complain = "";
$description = "";


if(isset($_POST['submit'])){
		// 
		$type = strip_tags($_POST['type']);
		$date_of_complain = strip_tags($_POST['date_of_complain']);
		$description = strip_tags($_POST['description']);

		echo $type ." ";
		echo $date_of_complain ." ";
		echo $description ." ";

		$query = mysqli_query($con, "INSERT INTO complain (id, type, date_of_complain, description) VALUES (NULL, '$type', '$date_of_complain', '$description')");
	}
?>


<html>
<head>
	<title>Complain Submission</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  	<div class="row">
    	<div class="col-md-12 col-sm-12">
      		<div class="well well-lg biodata">
      			<form action="submit.php" method="POST">
			        <h2 align="center">Complain Submission</h2>
			        <hr>
			        <div class="form-group row">
			            <div class="col-sm-10">
			                <input type="text" name="type" class="form-control form-control-sm" placeholder="Enter Type of Complain">
			            </div>
			        </div>

			        <div class="form-group row">
			            <div class="col-sm-10">
			                <input type="date" name="date_of_complain" class="form-control form-control-sm" placeholder="Date of Complain">
			            </div>
			        </div>

			        <div class="form-group row">
			            <div class="col-sm-10">
			                <input type="text" name="description" class="form-control form-control-sm" placeholder="Description of Complain">
			            </div>
			        </div>

			        <input class="form-control form-control-sm col-sm-10" type="submit" name="submit" value="Submit Complain">
			        <br><br>
			        <a href="show.php">Show All Complains</a>
			    </form>
			</div>
		</div>
	</div>
</div>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>
</html>