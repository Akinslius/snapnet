<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
<!-- Bootstrap css link -->
<link rel="stylesheet" href="css/bootstrap.css">
<style>
body{
    background-color:grey;
}


</style>


</head>
<body >
    <h1 class="text-white text-center"> National Population Commission </h1> 

    <div class="bg-primary">
        <h2 class="text-center" >Register Account</h2>
        <div class="container text-center ">
            <form action="action/registration.php" method="POST" enctype="multipart/form-data" >
                <div class="mb-3">
                    <input type="text" name="name" placeholder="Enter your name" class="form-control w-50 m-auto" required  >
                </div>
                <div class="mb-3">
                    <input type="email" name="email" placeholder="Enter your email" class="form-control w-50 m-auto" required  >
                </div>
                <div class="mb-3">
                    <input type="password" name="password" placeholder="Enter your Password" class="form-control w-50 m-auto" required  >
                </div>
                <div class="mb-3">
                    <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control w-50 m-auto" required  >
                </div> 
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto" >
                        <option selected value="corpers"> corpers </option>
                    
                        <option  value="others"> others </option>
                    </select>
                </div>
                <button type="submit" class="btn text-white bg-warning my-4 ">
                    Register

                </button>
                <p class="text-dark mb-3" > Already have an account?  <a href="index.php" class="text-white text-decoration-none">Login Here</a> </p>
                
            </form>


        </div>


    </div>


    
</body>
</html>