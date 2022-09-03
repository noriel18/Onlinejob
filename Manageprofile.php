<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
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
   <div class="back">
     <a  align="left" style="font-size: 15px;margin: 10px;color:#000000; "href="../onlinejobproject/index.php">Click to Back</a>
    </div>
    <br>
    <br>
    <br>
<?php
session_start();
include('conn.php');
include('function.php');
$user_data = check_login($conn);
?>
<div class="title">
<table width="100%" border="1" style="border-collape:collapse;">
    <thead>
        <th>User ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th>Birthday</th>
        <th>Gender</th>

    </thead>
    <tbody>
    <?php
    $sel_query="SELECT * from login_user WHERE email='".$_SESSION['email']."'";
    if($result = mysqli_query($conn, $sel_query)){
        $row = mysqli_fetch_assoc($result);
    ?>
    <tr>
        <td align="center"><?php echo $user_data['user_id']; ?></td>
        <td align="center"><?php echo $user_data['firstname']; ?></td>
        <td align="center"><?php echo $user_data["lastname"]; ?></td>
        <td align="center"><?php echo $user_data["email"]; ?></td>
        <td align="center"><?php echo $user_data["password"]; ?></td>
        <td align="center"><?php echo $user_data["birthday"]; ?></td>
        <td align="center"><?php echo $user_data["gender"]; ?></td>
    </tr>
</div>
    <?php }else{ die("Error with the query in the database");}?>
</tbody>
</table>    
</body>
</html>
