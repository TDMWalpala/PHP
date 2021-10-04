<?php
     $login=0;
     $invalid =0;
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
         include 'connect.php';
         $username = $_POST['username'];
         $password = $_POST['password'];
 
        $sql = "SELECT Employee_No FROM user WHERE User_Name = '$username' AND Password ='$password'";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            while($row= mysqli_fetch_assoc($result))
            {
                $empno  = $row['Employee_No'];
            }
        }

        
        $sql2 = "SELECT * FROM nurse WHERE Employee_No='$empno'";
        $result2 = mysqli_query($con,$sql2);

        if($result2)
        {
            $num = mysqli_num_rows($result2);
            if($num>0){
                //echo "Login sucessfully";
                $login =1;
                session_start();
                $_SESSION['username']=$username;
               // header('Location:home.php');
                  header('Location:nurseadmin.php');
            }else
            {
                //echo "Invalid data";    
                $invalid=1; 
            }
        }
        else
        {

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

    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  </head>
  <body>
    <?php
          if($login)
          {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong> You are successfully logged in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }  
          
          if($invalid)
          {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error </strong>Not Authorized.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          } 
    ?>
    
   <h1 class = "text-center my-5">Login Page</h1>
   <div class="container my-5">
   <form action = "nurselogin.php" method = "POST">
      <div class="mb-3">
         <label for="name" class="form-label">Username</label>
         <input type="text" class="form-control" placeholder = "Enter your username" name = "username">
      </div>

      <div class="mb-3">
         <label for="password" class="form-label">Password</label>
         <input type="password" class="form-control" placeholder = "Enter your password" name = "password">
       </div>
  
      <button type="submit" class="btn btn-primary w-100">Login</button>
      
    </form>
    </div>
  </body>
</html>