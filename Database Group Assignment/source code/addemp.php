<?php

     $success=0;
     $user =0;
     $usern=0;
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
         include 'connect.php';
         $name = $_POST['fullname'];
         $status = $_POST['status'];
         $address = $_POST['address'];
         $contact = $_POST['contact'];
         $occupation = $_POST['occupation'];
         

       
        $sql = "SELECT * FROM employee WHERE Name = '$name'";
       // $sql2 = "SELECT * FROM user WHERE User_Name = '$username'";


        $result = mysqli_query($con,$sql);
       // $result2= mysqli_query($con,$sql2);

        if($result)
        {
            $num = mysqli_num_rows($result);
            //$num2 = mysqli_num_rows($result2);
             
              if($num>0){
                //echo "User already exist";
                $user=1;
            }else
            {
              if($occupation=='doctor' || $occupation=='nurse')
              {
                $emptype= 'Medical Staff';
              }else
              {
               $emptype= 'Non medical Staff';
              }

                $sql3 =   "INSERT INTO employee (Name,Working_Status,Contact_No,Address,Employee_Type) VALUES ('$name','$status','$contact','$address','$emptype')";
               
                $result = mysqli_query($con,$sql3);   
               // $result2= mysqli_query($con,$sql4);
        

                if($result)
                {
                     echo "Signup sucessfully";
                     $success = 1;
                      session_start();
                      $_SESSION['fullname']=$name;
                      $_SESSION['occupation'] = $occupation;
                     
                      if($occupation=='doctor' || $occupation=='nurse')
                      {
                        //session_start();
                        //$_SESSION['fullname']=$name;
                        //$_SESSION['occupation'] = $occupation;
                        header('Location:medical.php');
                      }else if($occupation=='cleaner')
                      {
                        header('Location:cleaner.php');
                      }else if($occupation=='attendent'){
                        header('Location:attendent.php');
                      }
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

    <title>Add Employee</title>
  </head>
  <body>
    <?php
         if($user)
         {
           echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error! </strong> User already exist.
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
    <h1 class = "text-center">Add Employee</h1>
    <div class="container my-5">
    <form action="addemp.php" method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" class="form-control" placeholder = "Enter your full name" name = "fullname">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Address</label>
    <input type="text" class="form-control" placeholder = "Enter your address" name = "address">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Contact Number</label>
    <input type="text" class="form-control" placeholder = "Enter your contact number" name = "contact">
  </div>
  
  <div class="mb-3">
  <label for="name" class="form-label">Working Status</label>
  <select class="form-select" aria-label="Default select example" name="status">
       <option value="full time">Full time</option>
       <option value="part time">Part time</option>
  </select>
  </div>
  <div class="mb-3">
  <label for="name" class="form-label">Occupation</label>
  <select class="form-select" aria-label="Default select example" name="occupation">
       <option value="doctor">Doctor</option>
       <option value="nurse">Nurse</option>
       <option value="cleaner">Cleaner</option>
       <option value="attendent">Attendent</option>
  </select>
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100">Recuit</button>
  </div> 
</form>
  </div>
 
  </body>
</html>
