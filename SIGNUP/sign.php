<?php
     $success=0;
     $user =0;
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
         include 'connect.php';
         $username = $_POST['username'];
         $password = $_POST['password'];

        // $sql = "INSERt INTO registration (User_Name,Password) VALUES ('$username','$password')";
        // $result = mysqli_query($con,$sql);

        // if($result)
        // {
        //     echo "Data is inserted sucessfully";
        // }
        // else
        // {
        //     die(mysqli_error($con));
        // }

        $sql = "SELECT * FROM registration WHERE User_Name = '$username'";

        $result = mysqli_query($con,$sql);

        if($result)
        {
            $num = mysqli_num_rows($result);
            if($num>0){
                //echo "User already exist";
                $user=1;
            }else
            {
                $sql =   "INSERt INTO registration (User_Name,Password) VALUES ('$username','$password')";
                $result = mysqli_query($con,$sql);   

                if($result)
                {
                     //echo "Signup sucessfully";
                     $success = 1;
                }
                else
                {
                    die(mysqli_error($con));
                }
            }
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

    <title>Signup Page</title>
  </head>
  <body>
    <?php
         if($user)
         {
           echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Erro! </strong> User already exist.
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
      <h1 class = "text-center">Sign Up Page</h1>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" placeholder = "Enter your username" name = "username">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" placeholder = "Enter your password" name = "password">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div>
 
  </body>
</html>