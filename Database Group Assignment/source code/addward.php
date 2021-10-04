
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Ward</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Ward Page</h1>
    <div class="container my-5">
    <form action="addward.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">In Charge Employee Name</label>
    <input type="text" class="form-control" placeholder = "Enter In Charge Emloyee Name" name = "name">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Ward Name</label>
    <input type="text" class="form-control" placeholder = "Enter Ward Name" name = "wardname">
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
    $name = $_POST['name'];
    $wardname = $_POST['wardname'];
    $sql1 = "SELECT * FROM employee WHERE Name = '$name'";
    $run = mysqli_query($con,$sql1);
     
    while($row = mysqli_fetch_array($run))
    {
        $empno = $row['Employee_No'];
        //echo $row['Employee_No'];
    }
    
    $sql2 =  "INSERT INTO patient_care_unit(Employee_No) VALUES ('$empno')";
    $run2 = mysqli_query($con,$sql2);

    $sql3 = "SELECT PCU_Id FROM patient_care_unit WHERE Employee_No = '$empno'";
    $run3 = mysqli_query($con,$sql3);

    while($row = mysqli_fetch_array($run3))
    {
        $pcuid = $row['PCU_Id'];
        //echo $row['PCU_Id'];
    }

    $sql4 =  "INSERT INTO ward(Ward_Name,PCU_Id) VALUES ('$wardname','$pcuid')";
    $run4 = mysqli_query($con,$sql4);

    if($run&&$run2&&$run3)
    {
      header('Location:admin.php');
    }else{
      die(mysqli_error($con));
    }
   
  }
 
?>