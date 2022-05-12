<?php
//connecting to database 
include ('action/connection.php');
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">

    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">

    <style>
        body{
            background-color:wheat;
            
        }
        h1{
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

         img{
            border:3px solid red; 
            border-radius:20px; 
        } 
        
    </style>

</head>
<body>

<h1 class="text-white text-center"> National Population Commission </h1> 

    <div class="bg-primary">
        <h2 class="text-center" > kindly register citizen</h2>
        <div class="container text-center ">
            <form action="action/citizen.php" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <input type="text" name="name" placeholder="Enter your name" class="form-control w-50 m-auto" required  >
                </div>
                <div class="mb-3">
                    <select name="gender" class="form-select w-50 m-auto" >
                        <option  value="Male"> Male </option>
                    
                        <option  value="Female"> Female </option>
                        <option selected value="others"> I prefer not to say </option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" name="address" placeholder="Enter Citizen's Address here" class="form-control w-50 m-auto" required  >
                </div>
                <div class="mb-3">
                    <input type="tel" name="phone" placeholder="Enter Citizen's Phone number" class="form-control w-50 m-auto" required  >
                </div> 
                <div class="mb-3">
                    <input type="text" name="ward" placeholder="Enter Citizen's ward" class="form-control w-50 m-auto" required  >
                </div>
                
                <!-- <div class="mb-3">
                    <select name="ward" class="form-select w-50 m-auto" >
                        <option selected value="<</option>
                    
                        <option  value="ward-2"> ward 2 </option>
                    </select> -->
                </div>
                <button type="submit" class="btn text-white bg-warning my-4 ">
                    Submit </button>

                    <button class="btn text-white bg-warning my-4 ">
                    <a href="action/logout.php" >logout</a> </button> 
                   
               
                
            </form>


        </div>


    </div>







</body>
</html>