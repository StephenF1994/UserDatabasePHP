

<?php  include "functions.php";
		include "db.php";

		if(isset($_POST['submit'])){
			createUser();
		}
		

?>





<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<title></title>
</head>
<body>

<div class = "container">

	<div class="col-sm-6">
		<h1 class = "text-center">Create User</h1>

		<form action="LoginPage.php" method="post">
			<div class="form-group">
			<label for "username">Username</label>
			<input type="text" name="username" class="form-control">
			</div>

			<div class="form-group">
			<label for "password">Password</label>
			<input type="password" name="password" class="form-control">
			</div>

			<input type = "submit" class = 'btn btn-primary' name="submit" value="Create">


		</form>

	</div>

</div>

</body>
</html>