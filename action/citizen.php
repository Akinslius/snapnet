<?php
//connecting to database 
include ('connection.php');
session_start();

// fetching data from input field
$name = $_POST['name']; 
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$ward = $_POST['ward'];


$sql = "INSERT INTO citizens(name,gender,address,phone,ward) VALUES ('$name','$gender','$address','$phone','$ward') ";
// connect to database
$result = mysqli_query($con,$sql);

if($result){
    echo ' <script> alert ("Registration Successful");
    window.location="../table.php";
    </script> ';

}
// if data failed to submit
else{
    echo $result;

}




?>