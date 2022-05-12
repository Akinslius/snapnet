<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>report</title>
    
    <link rel="stylesheet" href="css/bootstrap.min">
<link rel="stylesheet" href="css/bootstrap-grid">
<link rel="stylesheet" href="css/bootstrap-grid.min">
<style>
    body{

        background-color:grey;
    
    }
</style>
</head>
<body>
<body>
    <div class="container-lg my-5 fw-bolder " >
   <div class="row">
       <div class="col-2-sm">
           <div class="col-8-sm ">
           <table class="table">
        <thead class="thead-light">
            <tr class="text-white">
                <th scope="col" > S/N </th>
                <th scope="col" > Users </th>
                <th scope="col" > State </th>
                <th scope="col" > LGA </th>
                <th scope="col" > Ward</th>
            </tr>
        </thead>
        <tbody class="text-white" >
  <?php


include ('action/connection.php');

$i = 0;


 $sql= "SELECT * FROM `citizen` ";

$result= mysqli_query($con,$sql); 


if($result){
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
         $name = $row['name'];
         $gender = $row['gender'];
        $address = $row['address'];
        $phone = $row['phone'];
        $ward_id= $row['ward_id'];
        $i++;

    echo '
        
       <tr>

       <th scope="row" > '.$i.' </th>
                       <td> '.$name.' </td>
                        <td> '.$gender.' </td>
                        <td> '.$address.'  </td>
                    <td> '.$phone.'  </td>
                    <td> '.$ward_id.'  </td>
                    <td>   <a href="update.php? updateid= '.$id.' " class="btn btn-outline-primary border-2 "> Update </a>  
                            <a href="delete.php? deleteid= '.$id.' " class="btn btn-outline-danger border-2 " onclick= confirm(echo "Are you sure you want to delete this user?") > Delete </a>  </td>
        </tr>
    ';

}

}

?> 
         
        </tbody>
        

    </table>

           </div>
           <div class="col-2-sm">

           </div>


       </div>

   </div>
   </div>
  <div class="row">
  <div class="col-2-sm"> </div>

  <div class="col-8-sm mx-5 " > <a href="index.php" class="btn btn-primary border-2 " > Login </a>  </div>

  <div class="col-2-sm"> </div>

    
</body>
</html>