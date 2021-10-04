<?php
session_start();
//echo $_SESSION['Employee_No'];
$empno = $_SESSION['Employee_No'];
$pid = $_SESSION['pid'];


     if($_SERVER['REQUEST_METHOD']=='POST')
     {
         include 'connect.php';
         $date = $_POST['Date'];
         $time = $_POST['Time'];
         $temp = $_POST['Temperature'];
         $Pulse = $_POST['Pulse'];
         $bpressure = $_POST['Blood_Pressure'];
         $weight = $_POST['Weight'];
         
       
          $sql =  "INSERT INTO patient_record (Employee_No,Patient_Id,Date,Time,Temperature,Pulse,Blood_Pressure,Weight) VALUES ('$empno','$pid','$date','$time','$temp','$Pulse','$bpressure','$weight')";
          $result = mysqli_query($con,$sql);
          
          if($result)
          {
            header('Location:recordSymptoms.php');
          }else
          {
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

    <title>Record Patient</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="findpatient.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Add Record</h1>
    <div class="container my-5">
    <form action="recordpatient.php" method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Date</label>
    <input type="date" class="form-control" placeholder = "Enter date" name = "Date">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Time</label>
    <input type="time" class="form-control" placeholder = "Enter time" name = "Time">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Temperature (celsius)</label>
    <input type="text" class="form-control" placeholder = "Enter body-temperature (celsius)" name = "Temperature">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Pulse (per minute)</label>
    <input type="Number"class="form-control" placeholder = "Enter Pulse rate" name = "Pulse">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Blood Pressure (mmHg)</label>
    <input type="text" class="form-control" placeholder = "Enter blood pressure"" name = "Blood_Pressure">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Weight (Kg)</label>
    <input type="text" class="form-control" placeholder = "Enter weight (Kg)" name = "Weight">
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100">Next</button>
  </div> 
</form>
  </div>
  </body>
</html>
