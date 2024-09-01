<?php

ob_start(); // turns on output buffering
session_start();
$timezone = date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect("localhost","root","","demo" ); // conection variable
if(mysqli_connect_errno()){
    echo "Failed to connect" .mysqli_connect_errno();
}

// $fname= "";    //full name
// $job="";       //job
// $em= "";       // Email id 
// $pn="";         // Phone no        
// $password= ""; // password 
// $password2= "";// password 2

$error_array=array();  // holds error messages

if (isset($_POST['register_button']))
{

    $fname = mysqli_real_escape_string($con,$_POST['reg_fname']);
    $job = mysqli_real_escape_string($con,$_POST['job']);
    $em = mysqli_real_escape_string($con,$_POST['reg_email']);
    $pn = mysqli_real_escape_string($con,$_POST['phno']);
    $password = mysqli_real_escape_string($con,$_POST['reg_password']);
    $password2 = mysqli_real_escape_string($con,$_POST['reg_password2']);

    if($password != $password2){
            echo "<script>alert('Password does not match')</script>";
        }else{
                        $insert ="INSERT INTO user (first_name,  job,  email,phone_number,password) values  ('$fname','$job','$em','$pn','$password')";
             
         $run_insert = mysqli_query($con,$insert);
         if($run_insert){
    echo "<script>alert('Uploaded')</script>";
}else{
     echo "<script>alert('Sorry')</script>";
 }

        }

    
     //$password = strip_tags($_POST['reg_password']);
    //$_SESSION['reg_password'] = $password; 

    // $password = strip_tags($_POST['reg_password2']);
    // $_SESSION['reg_password2'] = $password2; 
    
     //$query=mysqli_query($con,"INSERT INTO user VALUES (' ',$fname' ,'$job' , ' $em','$pn','$password')");
    //         array_push($error_array,"<span style = 'color: #14C800;'> You are all set !!! Goahead and login!! :)</span><br>");


            // clear session variables
            // $_SESSION['reg_fname'] = "";
            // $_SESSION['job'] = "";
            // $_SESSION['phno'] = "";
            // $_SESSION['reg_lemail'] = "";
}



?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form </title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>

    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="#" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="reg_fname" placeholder="Enter your name" required>
                    </div>
                     <div class="input-box">
                        <span class="details">Job</span>
                        <input type="text" name="job" placeholder="Enter your username" required>
                    </div>



                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="text" name="reg_email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" name="phno" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="text" name="reg_password" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="text" name="reg_password2" placeholder="Confirm your password" required>
                    </div>

                    <div class="button">
                        <input type="submit" name="register_button" value="Register">
                    </div> 
                    <a href="Login.php">Login here!!</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>