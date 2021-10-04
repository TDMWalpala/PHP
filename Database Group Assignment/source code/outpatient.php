
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
        <a class="navbar-brand" href="addpatient.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Out Patient Page</h1>
    <div class="container my-5">
    <form action="outpatient.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Admitted Time</label>
    <input type="time" class="form-control" placeholder = "Enter Admitted Time" name = "addtime">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Admitted Date</label>
    <input type="date" class="form-control" placeholder = "Enter Admitted Date" name = "adddate">
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
  $pname=$_SESSION['pname'];
  $dob=$_SESSION['dob'];
  $type=$_SESSION['type'];
  include 'connect.php';
  

  if(isset($_POST['submit']))
  {
    $addtime = $_POST['addtime'];
    $adddate = $_POST['adddate'];
    
    $sql1 = "INSERT INTO patient (patient_Name,Birth_Date,Patient_Type) VALUES ('$pname','$dob','$type')";
    $run1 = mysqli_query($con,$sql1);

    $sql5 = "SELECT patient_Id FROM patient WHERE Patient_Name = '$pname'";
    $run5 = mysqli_query($con,$sql5);

    while($row = mysqli_fetch_array($run5))
    {
        $pid = $row['patient_Id'];
    }
     
    $sql3 =  "INSERT INTO out_patient (patient_Id,Date,Time) VALUES ('$pid','$adddate','$addtime')";
    $run3 = mysqli_query($con,$sql3);

    if($run1&&$run3)
    {
      header('Location:admin.php');
    }
   
  }
 
?>