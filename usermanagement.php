<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: #0FC158;
		}
		
.back{
		padding: 5px;
        color: Black;
        background-color: #05D6D9;
        border: none;
        position: absolute;
        top: 3px;
        right: 10px;

	}
.employer{
		padding: 5px;
        color: Black;
        background-color: #011FF7;
        border: none;
        position: absolute;
        top: 90px;
        right: 10px;

	}
	</style>
		<div class="back">
		<a style="font-size: 15px;margin: 10px;color:#000000;"href="../onlinejobproject/homepage.php">Click Back to Homepage</a><br><br>
		</div>
		<div class="title"><h1> All User Account Details</h1></div>
		<div class="employer">
		<a style="font-size: 15px;margin: 10px;color:#000000;"href="../onlinejobproject/manageemployer/ManageEmployer.php">Click THis All Job Employer Users Registers</a><br><br>
		</div>
<?php
include('conn.php');
?>
<br>
<br>
<br>
<br>
<table width="100%" border="1" style="border-collape:collapse;">
	<thead>
		<th>User ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Email</th>
		<th>Password</th>
		<th>Birthday</th>
		<th>Gender</th>
		<th>Update</th>
		<th>Delete</th>
	</thead>
	<tbody>
	<?php
	$count=1;
	$sel_query="SELECT * FROM login_user;";
	$result = mysqli_query($conn, $sel_query);
	while($row = mysqli_fetch_assoc($result)) {
	?>
	<tr>
		<td align="center"><?php echo $row['user_id']; ?></td>
		<td align="center"><?php echo $row['firstname']; ?></td>
		<td align="center"><?php echo $row["lastname"]; ?></td>
		<td align="center"><?php echo $row["email"]; ?></td>
		<td align="center"><?php echo $row["password"]; ?></td>
		<td align="center"><?php echo $row["birthday"]; ?></td>
		<td align="center"><?php echo $row["gender"]; ?></td>
	    <td align="center"><a href="">">Update</a></td>
        <td align="center"><a href="">">Delete</a></td>
	</tr>
	<?php $count++; }?>
</tbody>
</table>	
</body>
</html>
