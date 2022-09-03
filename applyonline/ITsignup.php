<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body >
    <style type="text/css">
            body{
    font-family: sans-serif;
    background-image: url(.././pictures/background9.jpg);
    background-size: 1085px; 
    background-position: top 80% right 0px ;
}
#buttonss{

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
        top: 65px;
        left: 25px;

}
.lastname{
    padding: 0px;
        color: Black;
        background-color: #BCD905;
        border: none;
        position: absolute;
        top: 120px;
        left: 25px;
}
.middlename{
        padding: 0px;
        color: Black;
        background-color: #BCD905;
        border: none;
        position: absolute;
        top: 180px;
        left: 25px;
}
.email{
        padding: 0px;
        color: Black;
        background-color: #BCD905;
        border: none;
        position: absolute;
        top: 235px;
        left: 25px;
}
.location{
        padding: 0px;
        color: Black;
        background-color: #BCD905;
        border: none;
        position: absolute;
        top: 290px;
        left: 25px;
}
.birthday{
        padding: 0px;
        color: Black;
        background-color: #BCD905;
        border: none;
        position: absolute;
        top: 350px;
        left: 25px;
}
.occupation{
        padding: 0px;
        color: Black;
        background-color: #BCD905;
        border: none;
        position: absolute;
        top: 410px;
        left: 25px;
}
.gender{
        padding: 0px;
        color: Black;
        background-color: #BCD905;
        border: none;
        position: absolute;
        top: 470px;
        left: 25px;
}
</style>
<?php
include('connectit.php');
if(isset($_POST['btns_save'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $middlename=$_POST['middlename'];
    $email=$_POST['email'];
    $locations =$_POST['locations'];
    $occupation=$_POST['occupation'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];

    $sql= "INSERT INTO itlogin_users values(default,'$firstname', '$lastname','$middlename', '$email', '$locations','$occupation','$birthday' ,'$gender')";
    if (mysqli_query($itcon, $sql)){
        echo "New account succesfully created";
        echo "  click back ";

    } 
    else {
        echo "ERROR: Could not able to execute $sqls. " . mysqli_error($itcon);   
    }

    $itcon->close();
}   
?>
<div class="cont_ord">
    <font size="6" color="#BCD905"><legend> IT Department Sign up</legend></font>
    <div class='field_container'>
        <form action="" method="post">
            <div class='cont_details'>
                <fieldset>
                    <legend> Details</legend>
                <div class="firstname">
                    <label for="Firstname">First Name</label>
                </div>
                    <br>
                    <input type="text" name="firstname"/>
                    <br>
                <div class="lastname">
                    <label for="lastname">Last Name</label>
                </div>
                    <br>
                    <br>
                    <input type="text" name="lastname"/>
                    <br>
                <div class="middlename">
                    <label for="MiddleName">MiddleName</label>
                </div>
                    <br>
                    <br>
                    <input type="text" name="middlename"/>
                    <br>
                <div class="email">
                    <label for="Email">Email</label>
                </div>
                    <br>
                    <br>
                    <input type="text" name="email"/>
                    <br>
                <div class="location">
                    <label for="location">Complete Address</label>
                     </div>
                     <br>
                     <br>
                    <input type="text" name="locations"/>
                    <br>
                <div class="birthday">
                    <label for="Birthday">Birthday</label>
                </div>
                    <br>
                    <br>
                    <input type="text" name="birthday"/>
                    <br>
                <div class="occupation">
                    <label for="occupation">occupation</label>
                    </div>
                    <br>
                    <br>
                    <input type="text" name="occupation"/>
                    <br>
                <div class="gender">
                    <label for="Gender">Gender</label>
                    </div>
                    <br>
                    <br>
                    <input  type="text" name="gender"/>
                    <br>
                </fieldset>
            </div>
            <br>
            <input type="submit" name="btns_save" value="Submit"/>
            <br>
            <br>
            <a id="buttonss" href=".././index.php">Click to Back</a>
        </form>
    </div>
</div>
</body>
</html>
</body>
</html>