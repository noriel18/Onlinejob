<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
		body{
		background-color: #3D4DA3;

	}
.back{
		padding: 10px;
		color: Black;
		background-color: #D30B0B;
		border: none;
		position: absolute;
		top: 3px;
		right: 10px;
}
.title{
		padding: 10px;
		color: Black;
		background-color: #11779E;
		border: none;
}
</style>
<body>
	<div class=" entrepuser"><h1>Entrep User Register</h1></div>
	<div class="back">
	 <a  align="left" style="font-size: 15px;margin: 10px;color:#000000; "href=".././manageemployer/ManageEmployer.php">Click to Back</a>
	</div>
	<br>
	<br>
	<br>
<?php
include('connectentrep.php');
?>
<div class="title">
<table width="100%" border="1" style="border-collape:collapse;">
	<thead>
		<th>User ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Middlename</th>
		<th>Email</th>
		<th>Location</th>
		<th>Ocupation</th>
		<th>BirthDate</th>
		<th>Gender</th>

	</thead>
	<tbody>
	</div>
	<?php
	$count=1;
	$sel_query="SELECT * FROM entreplogin_users;";
	$result = mysqli_query($itcon, $sel_query);
	while($row = mysqli_fetch_assoc($result)) {
	?>
	<tr>
		<td align="center"><?php echo $row['user_id']; ?></td>
		<td align="center"><?php echo $row['firstname']; ?></td>
		<td align="center"><?php echo $row["lastname"]; ?></td>
		<td align="center"><?php echo $row["middlename"]; ?></td>
		<td align="center"><?php echo $row["email"]; ?></td>
		<td align="center"><?php echo $row["locations"]; ?></td>
		<td align="center"><?php echo $row["occupation"]; ?></td>
		<td align="center"><?php echo $row["birthday"]; ?></td>
		<td align="center"><?php echo $row["gender"]; ?></td>
	</tr>
	<?php $count++; }?>
</body>
</html>