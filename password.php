<?php 
session_start();
//$password = "admin";
	if(isset($_POST['Login'])){
		if(strtolower($_POST['password']) == "admin"){
			$_SESSION['Login'] = TRUE;
			header("Location:../onlinejobproject/usermanagement.php");
		}else{
			$error="Login failed!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>

</head>
<body>
	<style type="text/css">
		body{
	font-family: sans-serif;
	background-image: url(../onlinejobproject/pictures/background1.jpg);
	background-repeat: no-repeat;
	background-size: 1400px; 
}
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
		color: Black;
		background-color: #FF008F;
		border: none;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 400px;
		padding: 20px;
		color: #E112E7;
		background-repeat: no-repeat;
		background-size: 750px; 
		background-image: url(../onlinejobproject/pictures/background2.jpg);
	}
	.password{
		padding: 5px;
		color: Black;
		background-color: #FF008F;
		border: none;
		position: absolute;
		top: 20px;
		right: 10px;

	}

	</style>

	<div id="box">
		
		<form method="post">
			<div align="center" style="font-size: 30px;margin: 10px;color: #FF008F;">Admin</div>
			<!--<div style="font-size: 20px;margin: 10px;color: #FF008F;">Email</div><br>

			<input id="text" type="text" name="email"><br><br>-->
			<div style="font-size: 20px;margin: 10px;color: #FF008F;">Password</div><br>
			<div class="password" style="font-size: 20px;margin: 10px;color: #01DDF7;">Temporary Visible Password = admin</div><br>

			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" name="Login" value="Login"><br><br>
			
		</form>
	</div>
	<div class="title">
		<a id= "button" align="left" style="font-size: 15px;margin: 10px;color:#A2B60F;"href="../onlinejobproject/homepage.php">Click Back to Homepage</a><br><br>
		</div>
</body>
</html>