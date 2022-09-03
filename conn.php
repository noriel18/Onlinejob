<?php
$servername = "localhost";
$username = "root";
$password = "";
//$database = "";
$database = "DBS_users";

$conn = mysqli_connect($servername, $username, $password, $database);
//open comment  to database function and  close it once you are done
//open comment  to database function and  close it once you are done
//open database $database = "Entrep_users"
//once  you create  a database  close again /* and /*


/*if (mysqli_connect_error()) {
	die("Connection failed: " . mysqli_connect_error());
} echo "Connection succesfully established!.<br/>";
$sql= "CREATE DATABASE DBS_users";

if(mysqli_query($conn, $sql)){
	echo "Database was successfully created.";
}
else {
	echo "ERROR: Could not able to execute $sql." . mysqli_error($conn);
}
$sql = "CREATE TABLE login_user
(user_id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL, 
 lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, 
  birthday DATE,
   gender CHAR(6))";

if (mysqli_query($conn, $sql)) {
	echo "The table was successfully created!";
}
else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
*/
//$conn->close();
?>