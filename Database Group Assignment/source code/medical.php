<?php
      session_start();
      $name = $_SESSION['fullname'];
      $occupation = $_SESSION['occupation'];
      include 'connect.php';

     $success=0;
     $user =0;

     $sql = "SELECT Employee_No FROM employee WHERE Name = '$name'";
        $result1 = mysqli_query($con,$sql);
        if($result1)
        {
          while($row = mysqli_fetch_assoc($result1))
          {
            
            //echo $row['Employee_No'];
            $empno = $row['Employee_No'];

          }
        }
        else
        {
          echo"abc";
        }

     if($_SERVER['REQUEST_METHOD']=='POST')
     {
         //include 'connect.php';
         $regno = $_POST['regno'];
         $joindate = $_POST['joindate'];
         //$resigndate = $_POST['resigndate'];
         $sql2 =  "INSERT INTO medical_staff (Employee_No,Reg_No,Join_Date,Type) VALUES ('$empno','$regno','$joindate','$occupation')";

         $result2 = mysqli_query($con,$sql2);

         if($result2)
         {

            if($occupation=='doctor')
            {
              header('Location:doctor.php');

            }else
            {
              $sql3 =  "INSERT INTO nurse (Employee_No) VALUES ('$empno')";
              $result3 = mysqli_query($con,$sql3);
              if($result3){
                header('Location:username.php');
              }else{
                die(mysqli_error($con));
              }
            }
           
         }else{
          die(mysqli_error($con));
        }
         
      }
     //header('Location:log.php');
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
           <strong>Error! </strong>Register number already exist.
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
        <a class="navbar-brand" href="addemp.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Medical Staff Page</h1>
    <div class="container my-5">
    <form action="medical.php" method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Registration Number</label>
    <input type="text" class="form-control" placeholder = "Enter your registration number" name = "regno">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Join Date</label>
    <input type="date" class="form-control" placeholder = "Enter your join date" name = "joindate">
  </div>
  <button type="submit" class="btn btn-primary w-100">Continue</button>
</form>
  </div>
 
  </body>
</html>