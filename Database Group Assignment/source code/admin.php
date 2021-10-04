<?php
  session_start();
  $username=$_SESSION['username'];
  include 'connect.php';

  $sql = "SELECT Employee_No FROM user WHERE User_Name = '$username'";
        $result1 = mysqli_query($con,$sql);
        if($result1)
        {
          while($row = mysqli_fetch_assoc($result1))
          {
            
            $empno = $row['Employee_No'];

          }
        }
        else
        {
          echo"abc";
        }

        $sql1 = "SELECT Name FROM employee WHERE Employee_No = '$empno'";
        $result2 = mysqli_query($con,$sql1);
        if($result2)
        {
          while($row = mysqli_fetch_assoc($result2))
          {
            
            $name = $row['Name'];

          }
        }
        else
        {
          echo"def";
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

    <title>Admin <?php echo $username;?></title>
  </head>
  <body style="background-color:#7ed6df;">
<nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
        <img src="./imgs/Home.png" alt="" width="40" height="40">
        </a>
        <p class="h3">Welcome <?php echo $username; ?></p> 
      </div>
   </nav>    
<div class="container mt-5">
<div class="btn-group mx-3">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Employee
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="addemp.php">Recuit Employee</a></li>
    <li><a class="dropdown-item" href="assignemp.php">Assign Employee</a></li>
    <li><a class="dropdown-item" href="displayemp.php">Display Employee Details</a></li>
    <li><a class="dropdown-item" href="fireemp.php">Update & Delete Employee Details</a></li>
    <li><a class="dropdown-item" href="addadmin.php">Add Admin</a></li>
  </ul>
</div>
<div class="btn-group mx-3">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Diagnostic Unit
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="adddiaunit.php">Open New Diagnostic Unit</a></li>
    <li><a class="dropdown-item" href="displaydiaunit.php">Display Diagnostic Unit Details</a></li>
    <li><a class="dropdown-item" href="remove&updatediaunit.php">Update & Close Diagnostic Unit</a></li>
  </ul>
</div>
<div class="btn-group mx-3">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Ward
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="addward.php">Open New Ward</a></li>
    <li><a class="dropdown-item" href="displayward.php">Display Ward Details</a></li>
    <li><a class="dropdown-item" href="remove&updateward.php">Update & Close Ward</a></li>
  </ul>
</div>
<div class="btn-group mx-3">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Patient
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="addpatient.php">Admit New Patient</a></li>
    <li><a class="dropdown-item" href="displaypatient.php">Display Patient Details</a></li>
    <li><a class="dropdown-item" href="ecdu.php">Update Emergency Contact</a></li>
    <li><a class="dropdown-item" href="icdu.php">Update Insurance Details</a></li>
    <li><a class="dropdown-item" href="patientdu.php">Update Patient Details & Delete Patient Details</a></li>
  </ul>
</div>
<div class="btn-group mx-3">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Drug
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="adddrug.php">Add New Drug</a></li>
    <li><a class="dropdown-item" href="drugsupply.php">Recieve Drug</a></li>
    <li><a class="dropdown-item" href="displaydrug.php">Display Drug Details</a></li>
    <li><a class="dropdown-item" href="drugdu.php">Update Drug Details or Remove Drug</a></li>
  </ul>
</div>
<div class="btn-group mx-3">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Test
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="addtest.php">Add New Test</a></li>
    <li><a class="dropdown-item" href="displaytest.php">Display Test Details</a></li>
    <li><a class="dropdown-item" href="testdu.php">Update Test Details & Remove Test</a></li>
    </ul>
</div>
<div class="btn-group mx-3">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Vendor
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="addvendor.php">Add New Vendor</a></li>
    <li><a class="dropdown-item" href="displayvendor.php">Display Vendor </a></li>
    <li><a class="dropdown-item" href="removevendor.php">Update & Remove Vendor</a></li>
    </ul>
</div>
<div class="btn-group mx-3">
  <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Bed
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="addbed.php">Add New Bed</a></li>
    <li><a class="dropdown-item" href="displaybed.php">Display Bed Details</a></li>
    <li><a class="dropdown-item" href="beddu.php">Update Bed Details & Remove Bed</a></li>
    </ul>
</div>
<a href="logout.php"><button type="btn" class="btn btn-danger">Log Out</button></a> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>