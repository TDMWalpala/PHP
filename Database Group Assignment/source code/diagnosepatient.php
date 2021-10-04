
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Diagnose patient</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="finddiagnosepatient.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Diagnose Page</h1>
    <div class="container my-5">
    <form action="diagnosepatient.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Diagnose Code</label>
    <input type="text" class="form-control" placeholder = "Enter Diagnose Code" name = "code">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Diagnose Name</label>
    <input type="text" class="form-control" placeholder = "Enter Diagnose Name" name = "name">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Date</label>
    <input type="date" class="form-control" placeholder = "Enter Date" name = "date">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Time</label>
    <input type="time" class="form-control" placeholder = "Enter Time" name = "time">
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Description" id="floatingTextarea2" name = "description" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Description</label>
</div>

   <div class="mt-3">
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
    $code = $_POST['code'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $description = $_POST['description'];
    
 
    $sql =  "INSERT INTO diagnose(Diagnose_Code,Employee_No,Patient_Id,Diagnose_Name,Date,Time,Description) VALUES ('$code','$empno','$pid','$name','$date','$time','$description')";
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