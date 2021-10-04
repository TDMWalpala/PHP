
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Patient Unit</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Patient Emergency Contact Page</h1>
    <div class="container my-5">
    <form action="addpatientec.php" method = "POST">

    <div class="mb-3">
    <label for="name" class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder = "Enter First Name" name = "fname">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder = "Enter Last Name" name = "lname">
  </div>
    <div class="mb-3">
    <label for="name" class="form-label">Relationship</label>
    <input type="text" class="form-control" placeholder = "Enter Relationship to Patient" name = "relationship">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Address</label>
    <input type="text" class="form-control" placeholder = "Enter Address" name = "address">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Contact Number</label>
    <input type="text" class="form-control" placeholder = "Enter Contact Number" name = "number">
  </div>
   <div class="mb-3">
       <button type="submit" class="btn btn-primary w-100" name = 'submit'>Continue</button>
   </div>
</form>
  </div>
  </body>
</html>

<?php

  include 'connect.php';
  session_start();
  $pid=$_SESSION['patient_Id'];
  
  if(isset($_POST['submit']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $relationship = $_POST['relationship'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $insurance = $_POST['insurance'];

    $sql1 =  "INSERT INTO emegency_contact(patient_Id,Contact_No,First_Name,Last_Name,Relationship,Address) VALUES ('$pid','$number','$fname','$lname','$relationship','$address')";
    $run1 = mysqli_query($con,$sql1);

    if($run1)
    {
        header('Location:admin.php');
    }
   
  }
 
?>