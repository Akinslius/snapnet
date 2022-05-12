<?php
//connecting to database 
include ('connection.php');
session_start();

// fetching data from input field
$name = $_GET['name']; 
$password = $_GET['password'];

// check if the data is available in the database
$sql = " SELECT * FROM users WHERE name = '".$name."' AND password = '".$password."' ";
// connect to database
$result = mysqli_query($con, $sql );

if($result){
    $row = mysqli_fetch_assoc($result);

   $_SESSION['NAME']=$row['name'];
   $_SESSION['EMAIL']=$row['email'];
   

// if fetching successful, print "welcome user"
if($result){
    echo ' <script> alert("Welcome  ' .$_SESSION['NAME'].' " )  ;
    window.location="../portal.php";
    </script> ';
}
// else print failed
else{
    echo "Invalid Username or passord";
}
}



?>