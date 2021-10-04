<?php
      include 'connect.php';
      session_start();
      $name = $_SESSION['fullname'];

     $success=0;
     $user =0;
     $admin=0;

     $sql = "SELECT Employee_No FROM employee WHERE Name = '$name'";
        $result1 = mysqli_query($con,$sql);
        if($result1)
        {
          while($row = mysqli_fetch_assoc($result1))
          {
            
            $empno = $row['Employee_No'];

          }
        }
        else
        {
          echo"abc";
        }

     if($_SERVER['REQUEST_METHOD']=='POST')
     {
         $username = $_POST['username'];
         $password = $_POST['password'];
         $admin = 0;
         
         $sql2 = "INSERT INTO user (User_Name,Password,Employee_No,Admin) VALUES ('$username','$password','$empno','$admin')";


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

    <title>Medical Staff Page</title>
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
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
        <img src="./imgs/Home.png" alt="" width="40" height="40">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Username Page</h1>
    <div class="container my-5">
    <form action="username.php" method = "POST">
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

               
        
               






































               
   