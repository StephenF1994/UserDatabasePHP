<?php 
	include "db.php";
	include "functions.php"; 


if(isset($_POST['submit'])){
	deleteDetails();
}
?>





<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
	<title>Deleting user from database</title>
	</head>
	<body>

			<div class = "container">

						<div class="col-sm-6">
						<h1 class="text-center">Delete User</h1>

							<form action="LoginDelete.php" method="post">
								<div class="form-group">
									<label for "username">Username</label>
									<input type="text" name="username" class="form-control">
								</div>

								<div class="form-group">
									<label for "password">Password</label>
									<input type="password" name="password" class="form-control">
								</div>

								<div class="form-group">
									<select name="id" id="">

												<?php
														
												showData();

												?> 
									
									</select>
								</div>

								<input type = "submit" class = 'btn btn-primary' name="submit" value="Update">


							</form>

								

						</div>

			</div>

</body>
</html>