
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>In atient Unit</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="addpatient.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">In Patient Page</h1>
    <div class="container my-5">
    <form action="inpatient.php" method = "POST">

    <div class="mb-3">
    <label for="name" class="form-label">Admited Doctor's Name</label>
    <input type="text" class="form-control" placeholder = "Enter Admited Doctor's Name" name = "name">
  </div>
    <div class="mb-3">
    <label for="name" class="form-label">Patient Bed Number</label>
    <input type="text" class="form-control" placeholder = "Enter Bed Number" name = "bedno">
  </div>

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
    $name = $_POST['name'];
    $bedno = $_POST['bedno'];
    $addtime = $_POST['addtime'];
    $adddate = $_POST['adddate'];
    
    $sql4 = "SELECT Employee_No FROM employee WHERE Name = '$name'";
    $run4 = mysqli_query($con,$sql4);

    while($row = mysqli_fetch_array($run4))
    {
        $empno = $row['Employee_No'];
    }

    $sql1 = "INSERT INTO patient (patient_Name,Birth_Date,Patient_Type,Bed_No,Employee_No) VALUES ('$pname','$dob','$type','$bedno','$empno')";
    $run1 = mysqli_query($con,$sql1);
  
    $sql2 = "SELECT Ward_No FROM bed WHERE Bed_No = '$bedno'";
    $run2 = mysqli_query($con,$sql2);

    while($row = mysqli_fetch_array($run2))
    {
        $wardno = $row['Ward_No'];
    }

    $sql5 = "SELECT patient_Id FROM patient WHERE Patient_Name = '$pname'";
    $run5 = mysqli_query($con,$sql5);

    while($row = mysqli_fetch_array($run5))
    {
        $pid = $row['patient_Id'];
    }

    $sql3 =  "INSERT INTO in_patient (patient_Id,Admitted_Date,Admitted_Time,Ward_No) VALUES ('$pid','$adddate','$addtime','$wardno')";
    $run3 = mysqli_query($con,$sql3);

    $_SESSION['patient_Id']=$pid;
    if($run1&&$run2&&$run3)
    {
      header('Location:patientec.php');
    }
   
  }
 
?>