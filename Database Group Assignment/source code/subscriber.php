
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
        <img src="./imgs/Home.png" alt="" width="40" height="40">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Patient Insurance Subscriber Page</h1>
    <div class="container my-5">
    <form action="subscriber.php" method = "POST">

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
    session_start();
    $pid=$_SESSION['patient_Id'];
    $cname=$_SESSION['cname'];
    $bname=$_SESSION['bname'];
    $address=$_SESSION['address'];
    $contact=$_SESSION['contact'];

    include 'connect.php';
  
  if(isset($_POST['submit']))
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $relationship = $_POST['relationship'];
    $number = $_POST['number'];

    $sql1 =  "INSERT INTO insuarance_company(patient_Id,Registered_Branch_Name,Company_Name,Branch_Contact_No,Branch_Address,IS_First_Name,IS_Last_Name,IS_Contact_No,IS_Relationship) VALUES ('$pid','$bname','$cname','$contact','$address','$fname','$lname','$number','$relationship')";
    $run1 = mysqli_query($con,$sql1);
    
    if($run1){
        header('Location:admin.php');
    }else{
        die(mysqli_error($con));
    }
   
  }
 
?>