<?php 

session_start();

	include("conn.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from login_user where email= '$email' && password = '$password' limit 1";
			$result = mysqli_query($conn, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['email'] = $user_data['email'];
						header("Location:../onlinejobproject/index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

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


	</style>

	<div id="box">
		
		<form method="post">
			<div align="center" style="font-size: 30px;margin: 10px;color: #FF008F;">Login</div>
			<div style="font-size: 20px;margin: 10px;color: #FF008F;">Email</div><br>

			<input id="text" type="text" name="email"><br><br>
			<div style="font-size: 20px;margin: 10px;color: #FF008F;">Password</div><br>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a id="button" align="left" style="font-size: 15px;margin: 10px;" href="../onlinejobproject/signup.php">Click to Signup</a><br><br>
			
		</form>
	</div>
	<div class="title">
		<a id= "button" align="left" style="font-size: 15px;margin: 10px;color:#A2B60F;"href="../onlinejobproject/homepage.php">Click Back to Homepage</a><br><br>
		</div>
</body>
</html>