<?php  include "db.php";
		
	
	function showData(){
		global $connection;	

	$query = "SELECT * FROM(users)";
			

	$result = mysqli_query($connection, $query);					//Checks to see if the conection and SQL statement is succesfull
	if(!$result){
		die("query failed");										//if not succesfull display query failed.
	}



	while($row = mysqli_fetch_assoc($result)){
		$id = $row['id'];

		echo "<option value ='$id'>$id</option>";
	}

}




function createUser(){
	global $connection;

	$username = ($_POST["username"]);		
	$password = ($_POST["password"]);		

	
	$query = "INSERT INTO users(Username, Password) ";				
	$query .= "VALUES('$username' , '$password')";					

	$result = mysqli_query($connection, $query);					
	if(!$result){
		die("query failed");										
	}
	else {
		echo "User " . $username . " added to database";
	}
	
}









function updateDetails(){

	global $connection;
	$password = $_POST['password'];
	$username = $_POST['username'];
	$id = $_POST['id'];

	$query = "UPDATE users SET ";
	$query .= "username = '$username', password = '$password' ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if(!$result){
		die("query failed" . mysqli_error($connection));
	}

}



function deleteDetails(){

	global $connection;
	$password = $_POST['password'];
	$username = $_POST['username'];
	$id = $_POST['id'];

	$query = "DELETE FROM users ";
	
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if(!$result){
		die("query failed" . mysqli_error($connection));
	}

}

						



?>