<?php

ob_start();
session_start();
$timezone = date_default_timezone_set("Asia/Kolkata");
$con = mysqli_connect("localhost","root","","demo" );
if(mysqli_connect_errno()){
    echo "Failed to connect" .mysqli_connect_errno();
}



// $fname= "";    //full name
// $job="";       //job
// $em= "";       // Email id 
// $pn="";         // Phone no        
// $password= ""; // password 
// $password2= "";// password 2


$sql = "SELECT name, job,  FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()){
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["first_name"] . "</td><td>". $row["job"]. "</td></tr>";
    }
    echo "</table>";
}
else{
    echo "0 results";
}

$conn->close();


?>
<!DOCTYPE html>
<html>

<head>
    <title>Employees</title>
    <link rel="stylesheet" href="css/search.css" />
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Skillset</th>
            <th>Phone No</th>
            <th>email</th>
            <th>city</th>
        </tr>
    </table>
</body>

</html>