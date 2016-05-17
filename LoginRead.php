

<?php  




	

	$connection = mysqli_connect('localhost', 'root', '', 'userBase');	//Create a connection with mySql Database
																		//Username is root password is blank and using datatbase  called userbase

	if($connection){													//If we get a connection
		echo "We are conected";
	}

	else{
		die("Database connection failed");
	}


	$query = "SELECT * FROM(users)";		

	$result = mysqli_query($connection, $query);					//Checks to see if the conection and SQL statement is succesfull
	if(!$result){
		die("query failed");										//if not succesfull display query failed.
	}



?>





<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<title>Reading Data from PHP Database</title>
	</head>
	<body>

			<div class = "container">

						<div class="col-sm-6">

								<?php 
									while($row = mysqli_fetch_assoc($result)){			
								?>
									<pre>
										<?php  													
											print_r($row);								//Bootstrap styling on printing out data.
																						//Do this by wrapping the print function in HTML tags pre.
											}

	 									?>
									</pre>

						</div>

			</div>

</body>
</html>