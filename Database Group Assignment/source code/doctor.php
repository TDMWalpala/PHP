<?php
      include 'connect.php';
      session_start();
      $name = $_SESSION['fullname'];

     $success=0;
     $user =0;

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
         $regno = $_POST['regno'];
         $area = $_POST['area'];
         
         $sql2 =  "INSERT INTO doctor (Employee_No,DEA_No,Speaciality_Area) VALUES ('$empno','$regno','$area')";

         $result2 = mysqli_query($con,$sql2);

         if($result2)
         {

            header('Location:username.php');
           
         }else{
            die(mysqli_error($con));
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
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Doctor Page</h1>
    <div class="container my-5">
    <form action="doctor.php" method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">DEA Registration Number</label>
    <input type="text" class="form-control" placeholder = "Enter your DEA registration number" name = "regno">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Speciality area</label>
    <input type="text" class="form-control" placeholder = "Enter your sepeciality area" name = "area">
  </div>
   <div class="mb-3">
       <button type="submit" class="btn btn-primary w-100">Continue</button>
   </div>
</form>
  </div>
 
  </body>
</html>