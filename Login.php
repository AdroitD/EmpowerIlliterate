<?php

ob_start(); // turns on output buffering
session_start();
$timezone = date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect("localhost","root","","demo" ); // conection variable
if(mysqli_connect_errno()){
    echo "Failed to connect" .mysqli_connect_errno();
}

if (isset($_POST['login'])) {

    
    $em = mysqli_real_escape_string($con,$_POST['reg_email']);
    
    $password = mysqli_real_escape_string($con,$_POST['reg_password']);

   $check_database_query = mysqli_query($con, "SELECT * FROM user WHERE email='$em' AND password='$password'");
    $check_login_query = mysqli_num_rows($check_database_query);
 
    if($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);
        
        
        
        header("Location: index.php");
        exit();
    }
    else {
        array_push($error_array, "Email or password was incorrect<br>");
    }



}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="loginbox">
        <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="#" method="POST">
            <p>Email</p>
            <input type="text" name="reg_email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="reg_password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <a href="Register.php">Don't have an account? Register</a>
        </form>

    </div>
</body>

</html>