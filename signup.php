<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
			body{
	font-family: sans-serif;
	background-image: url(../onlinejobproject/pictures/background9.jpg);
	background-repeat: no-repeat;
	background-size: 1085px; 
	background-position: top 80% right 0px ;
}
	#buttons{

		padding: 10px;
		width: 100px;
		color: Black;
		background-color: #FF008F;
		border: none;
}
.firstname{
	padding: 0px;
		color: Black;
		background-color: #BCD905;
		border: none;
		position: absolute;
		top: 50px;
		left: 25px;

}
.lastname{
	padding: 0px;
		color: Black;
		background-color: #BCD905;
		border: none;
		position: absolute;
		top: 90px;
		left: 25px;
}
.email{
	padding: 0px;
		color: Black;
		background-color: #BCD905;
		border: none;
		position: absolute;
		top: 130px;
		left: 25px;
}
.password{
	padding: 0px;
		color: Black;
		background-color: #BCD905;
		border: none;
		position: absolute;
		top: 173px;
		left: 25px;
}
.birthday{
	padding: 0px;
		color: Black;
		background-color: #BCD905;
		border: none;
		position: absolute;
		top: 212px;
		left: 25px;
}
.gender{
	padding: 0px;
		color: Black;
		background-color: #BCD905;
		border: none;
		position: absolute;
		top: 253px;
		left: 25px;
}
.sign{
	padding: 0px;
		color: Black;
		background-color: #B4C80C;
		border: none;
		position: absolute;
		top: 10px;
		left: 25px;
}
</style>
<?php
include('conn.php');
if(isset($_POST['btne_save'])){
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$birthday=$_POST['birthday'];
	$gender=$_POST['gender'];

	$sql= "INSERT INTO login_user values(default,'$firstname', '$lastname', '$email', '$password', '$birthday' , '$gender')";
	if (mysqli_query($conn, $sql)){
		echo "New account succesfully created";
		echo "   click back login to login your account";
		header("Location:../onlinejobproject/login.php");

	} 
	else {
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);	
	}

	$conn->close();
}

?>
<div class="cont_ord">
	<div class="sign">
	<legend >Sign up</legend>
	</div>
	<div class='field_container'>
		<form action="" method="post">
			<div class='cont_details'>
				<br>
				<fieldset>
					<legend> Details</legend>
					<div class="firstname">
					<label for="Firstname" >First Name</label>
					</div>
					<br>
					<input type="text" name="firstname"/>
					<br>
					<div class="lastname">
					<label for="lastname">Last Name</label>
					</div>
					<br>
					<input type="text" name="lastname"/>
					<br>
					<br>
					<div class="email">
					<label for="Email">Email</label>
					<br>
					</div>
					<input type="text" name="email"/>
					<br>
					<div class="password">
					<label for="Password">Password</label>
					<br>
					</div>
					<br>
					<input type="password" name="password"/>
					<br>
					<div class="birthday">
					<label for="Birthday">Birthday</label>
					<br>
					</div>
					<br>
					<input type="text" name="birthday"/>
					<br>
					<div class="gender">
					<label for="Gender">Gender</label>
					<br>
					</div>
					<br>
					<input  type="text" name="gender"/>
					<br>
					
				</fieldset>
			</div>
			<br>
			<input type="submit" name="btne_save" value="Submit"/>
			<br>
			<br>
			<br>
			<a id="buttons" href="../onlinejobproject/login.php">Click to login</a><br>
			<br>
			<br>
			<a id="buttons" href="../onlinejobproject/homepage.php">Click to back homepage</a><br><br>
		</form>
	</div>
</div>
</body>
</html>
</body>
</html>