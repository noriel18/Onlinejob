<?php
$dbhost = "localhost";
$dbuser ="root";
$password = "";
//$database = "";
$database = "IT_users";

$itcon = mysqli_connect ($dbhost, $dbuser, $password, $database);
//open comment  to database function and  close it once you are done
//open comment  to database function and  close it once you are done
//open database $database = "Entrep_users"
//once  you create  a database  close again /* and /*


/*if (mysqli_connect_error()) {
	die("Connection failed: " . mysqli_connect_error());
} echo "Connection succesfully established!.<br/>";
$sql= "CREATE DATABASE IT_users";
if(mysqli_query($itcon, $sql)){
	echo "Database was successfully created.";
}
else {
	echo "ERROR: Could not able to execute $sql." . mysqli_error($itcon);
}
$sql = "CREATE TABLE itlogin_users
(user_id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 firstname VARCHAR(30) NOT NULL, 
 lastname VARCHAR(30) NOT NULL,
 middlename VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL, 
  locations VARCHAR(30) NOT NULL,
  occupation VARCHAR(30) NOT NULL,
  birthday DATE,
   gender CHAR(6))";

if (mysqli_query($itcon, $sql)) {
	echo "The table was successfully created!";
}
else {
	echo "ERROR: Could not able to execute $sqls. " . mysqli_error($itcon);
}*/
//$itcon->close();
?>
