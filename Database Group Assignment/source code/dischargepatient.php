
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Discharge</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
      <a class="navbar-brand" href="finddischargpatient.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Discharge</h1>
    <div class="container my-5">
    <form action="dischargepatient.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Discharge Time</label>
    <input type="time" class="form-control" placeholder = "Enter discharge time" name = "time">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Discharge Date</label>
    <input type="date" class="form-control" placeholder = "Enter discharge date" name = "date">
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
  $pid = $_SESSION['patient_Id'];

  if(isset($_POST['submit']))
  {
    $dtime = $_POST['time'];
    $ddate = $_POST['date'];
    
    $sql =  "UPDATE in_patient SET Discharged_Time = '$dtime',Discharged_Date = '$ddate' WHERE patient_Id = '$pid'";
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