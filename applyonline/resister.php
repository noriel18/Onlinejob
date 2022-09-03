<?php 
session_start();

	include("connect.php");
	//include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$phone_number = $_POST['phone_number'];
		$job = $_POST['job'];




		if($firstname == '' || $lastname == '' || $middlename == '' || $username == '' || $email == '' || $address == '' || $phone_number == '' || $job == '')
		{

			//save to database
			//$user_id = random(20);
			echo "Please enter some valid information!";			
		}
		else
		{
			$query = "INSERT INTO registers (firstname,lastname,middlename,username,email,address,phone_number,job) values ('$firstname','$lastname','$middlename','$username','$email','$address','$phone_number','$job')";

			mysqli_query($con, $query);

			header("Location: index.php");
			die;
			//echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Register</div>
			<div style="font-size: 20px;margin: 10px;color: white;">Firstname</div>

			<input id="text" type="text" name="firstname"><br><br>
			<div style="font-size: 20px;margin: 10px;color: white;">Lastname</div>
			<input id="text" type="text" name="lastname"><br><br>
			<div style="font-size: 20px;margin: 10px;color: white;">Middlename</div>
			<input id="text" type="text" name="middlename"><br><br>
			<div style="font-size: 20px;margin: 10px;color: white;">Username</div>
			<input id="text" type="text" name="username"><br><br>
			<div style="font-size: 20px;margin: 10px;color: white;">E-mail</div>
			<input id="text" type="text" name="email"><br><br>
			<div style="font-size: 20px;margin: 10px;color: white;">Address</div>
			<input id="text" type="text" name="address"><br><br>
			<div style="font-size: 20px;margin: 10px;color: white;">Phone Number</div>
			<input id="text" type="text" name="phone_number"><br><br>
			<div style="font-size: 20px;margin: 10px;color: white;">Job</div>
			<input id="text" type="text" name="job"><br><br>

			<input id="button" type="submit" value="Register"><br><br>

		</form>
	</div>
</body>
</html> 