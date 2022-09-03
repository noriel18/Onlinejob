<?php 
session_start();

	include("conn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
	<style type="text/css">
			body{
	font-family: sans-serif;
	background-image: url(../onlinejobproject/pictures/background3.jpg);
	background-size: 1085px; 
	background-position: top 30% right 0px ;
}

#buttonindex{
	padding: 10px;
		width: 100px;
		color: Black;
		background-color: #04D7C4;
		border: none;
}
.title h1{
	background-image: url(../onlinejobproject/pictures/disco.jpg);
	background-position: top 50% right 450px ;
	background-repeat: no-repeat;
	padding: 20px;
	border-width: 2px;
	border-color: black;

}
.logouts{
	padding: 10px;
		width: 100px;
		height: 30px;
		color: Black;
		background-color: #D70404;
		border: none;
		position: absolute;
		top: 0px;
		right: 0px;

}
.searchbox{
	position: absolute;
	top: 10%;
	left: 10%;
	transform: translate(-50%,-50%);
	background: #04D7C4;
	height: 40px;
	border-radius: 40px;
	padding: 10px;
	display: flex;
	justify-content: center;
	align-items: center;
}
.Manageprofile{
	padding: 10px;
		color: Black;
		background-color: #E4F111;
		border: none;
		position: absolute;
		top: 90px;
		right: 10px;
}
.IT li{
	padding: 10px;
		color: Black;
		background-color: #FF008F;
		border: none;
		position: absolute;
		top: 190px;
		left: : 10px;
}
.ITjobs{
	padding: 10px;
		color: Black;
		background-color: #FF008F;
		border: none;
		position: absolute;
		top:240px;
		left: : 10px;
	}
.Entrepa li{
	padding: 10px;
		color: Black;
		background-color: #FF008F;
		border: none;
		position: absolute;
		top: 300px;
		left: : 10px;
}
.Entrepjobs{
	padding: 10px;
		color: Black;
		background-color: #FF008F;
		border: none;
		position: absolute;
		top:350px;
		left: : 10px;
	}

</style>

	<br>
<div class="logouts">
	<a id= "logouts" align="right" style="font-size: 15px;margin: 10px;color:#E7E303; "href="../onlinejobproject/logout.php">LOGOUT</a>
</div>
<br>
		<div id="searchbox">
		<input class="search"  value="" id="search" placeholder="Search" onchange="openPage()">
		<script >
			function openPage(){
				var x = document.getElementById('search').value;
				if (x === "IT"){
					window.open("../onlinejobproject/Jobs/IT.php");
				}
				if ( x === "Entrep"){
					window.open("../onlinejobproject/Jobs/Entrep.php");
				}
				if ( x === "entrep"){
					window.location.href="../onlinejobproject/Jobs/Entrep.php";
				}
				if ( x === "it"){
					window.location.href="../onlinejobproject/Jobs/IT.php";
				}
				if ( x === "it jobs"){
					window.location.href="../onlinejobproject/Jobs/IT.php";
				}
				if ( x === "entrep jobs"){
					window.location.href="../onlinejobproject/Jobs/Entrep.php";
				}
				if ( x === "IT Jobs"){
					window.location.href="../onlinejobproject/Jobs/IT.php";
				}
			}
		</script>
		</div>
	<div class="title">
	<h1><font color="#0CD6EE">Posted Jobs</h1></font><br>
</div>
<br>
<br>
<div class="Manageprofile">
<a id= "Employer" style="font-size: 15px;margin: 10px;color:#03042D 	; "href="../onlinejobproject/Manageprofile.php">PROFILE USER </a>
</div>
<br>
<br>
<div class= "IT">
<li>IT JOBS ONLY</li>
</div>
<br>
<div class="ITjobs">
<a id= "buttonindex" align="left" style="font-size: 15px;margin: 10px;color:#03042D; "href="../onlinejobproject/Jobs/IT.php">IT Jobs </a>
</div>
<br>
<br>
<br>
<div class="Entrepa">
<li>ENTERPRENUER JOBS ONLY</li>
</div>
<br>
<br>
<div class="Entrepjobs">
<a id= "buttonindex" align="left" style="font-size: 15px;margin: 10px;color:#03042D; "href="../onlinejobproject/Jobs/Entrep.php">Enterp Jobs</a>
</div>

<br>
<br>
<br>
</body>
</html>
