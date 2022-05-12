<?php
include ('connection.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$std = $_POST['std'];

// check if usename exist from database
$res = " SELECT * FROM users WHERE name = '".$name."' " ;
$ak = mysqli_query($con, $res);
if($ak -> num_rows == 0 ){
    echo ' <script> alert ("Username Taken");
    window.location="../register.php";
    </script> ';

}

// check if password match
if($password == $cpassword){

    //   submit all user data into the database
    $sql = "INSERT INTO users(name,email,password,type) VALUES ('$name','$email','$password','$std') ";

    $result = mysqli_query($con, $sql);
    // check if data submitted succefully 
    if($result){
        echo ' <script> alert ("Registration Successful");
        window.location="../index.php";
        </script> ';

    }
    // if data failed to submit
    else{
        echo "failed to submit";

    }
      

}
// if password doesn't match 
else{
    echo ' <script> alert ("Password do not match");
    window.location="../register.php";
    
    </script> ';
}

 





?>