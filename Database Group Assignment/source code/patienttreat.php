
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Patient Treat</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="findpatienttreat.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Patient Treat Page</h1>
    <div class="container my-5">
    <form action="patienttreat.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Treatment No</label>
    <input type="number" class="form-control" placeholder = "Enter Treatment Number" name = "tno">
  </div>
   
  <div class="mb-3">
    <label for="name" class="form-label">Date</label>
    <input type="date" class="form-control" placeholder = "Enter Date" name = "date">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Time</label>
    <input type="time" class="form-control" placeholder = "Enter Time" name = "time">
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
  $empno = $_SESSION['Employee_No'];
  $pid  = $_SESSION['pid'];

  if(isset($_POST['submit']))
  {
    $tno = $_POST['tno'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    
 
    $sql =  "INSERT INTO patient_treat(Employee_No,Patient_Id,Treatment_No,Date,Time) VALUES ('$empno','$pid','$tno','$date','$time')";
    $run = mysqli_query($con,$sql);

    if($run)
    {
      header('Location:doctoradmin.php');
    }
    else
    {
        die(mysqli_error($con));
    }
   
  }
 
?>