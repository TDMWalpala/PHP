
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
    <h1 class = "text-center">Patient Page</h1>
    <div class="container my-5">
    <form action="addpatient.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Patient Name</label>
    <input type="text" class="form-control" placeholder = "Enter Patient Name" name = "pname">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Patient Birth Date</label>
    <input type="date" class="form-control" placeholder = "Enter Patient Birth Date" name = "dob">
  </div>
  <div class="input-group mb-3">
  <div class="form-check">
  <input class="form-check-input " type="radio" name="type" id="flexRadioDefault1" VALUE="In patient">
  <label class="form-check-label" for="flexRadioDefault1">
    In patient
  </label>
</div>
<div class="form-check">
  <input class="form-check-input ms-3" type="radio" name="type" id="flexRadioDefault2" VALUE="Out patient" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Out patient
  </label>
</div>
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

  if(isset($_POST['submit']))
  {

    $pname = $_POST['pname'];
    $dob = $_POST['dob'];
    $type = $_POST['type'];

        session_start();
        $_SESSION['pname']=$pname;
        $_SESSION['dob']=$dob;
        $_SESSION['type']=$type;
        if($type=="In patient"){
            header('Location:inpatient.php');
        }else{
            header('Location:outpatient.php');
        }
    
   
  }
 
?>