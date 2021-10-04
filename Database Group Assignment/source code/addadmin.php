<?php
    include 'connect.php';
    
     $success=0;
     $user =0;
     $admin=0;

     if($_SERVER['REQUEST_METHOD']=='POST')
     {
         $username = $_POST['username'];
         $password = $_POST['password'];
         $admin = 1;
         
        $sql2 = "INSERT INTO user (User_Name,Password,Admin) VALUES ('$username','$password','$admin')";
        $result2 = mysqli_query($con,$sql2);

         if($result2)
         {
            $success=1;
            header('Location:admin.php');
           
         }else{
           $user=1;
         }
         
      }
     
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Admin Page</title>
  </head>
  <body>
    <?php
         if($user)
         {
           echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error! </strong>Username already exist.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
         }  
         
         if($success)
         {
           echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Welcome! </strong> You are sucessfully signup.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
         } 
    ?>
    <h1 class = "text-center">Admin Page</h1>
    <div class="container my-5">
    <form action="addadmin.php" method = "POST">
    <div class="mb-3">
    <label for="name" class="form-label">User Name</label>
    <input type="text" class="form-control" placeholder = "Enter username" name = "username">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder = "Enter your password" name = "password">
  </div>
   <div class="input-group mt-3">
       <button type="submit" class="btn btn-primary w-100">Done</button>
   </div>
</form>
</div>
   
  </body>
</html>

               
        
               






































               
   