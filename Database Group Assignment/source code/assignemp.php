
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Assign Employee</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Assign Employee Page</h1>
    <div class="container my-5">
    <form action="assignemp.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Employee Name</label>
    <input type="text" class="form-control" placeholder = "Enter Employee Name" name = "name">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Hours Per Week</label>
    <input type="text" class="form-control" placeholder = "Enter Test Name" name = "hours">
  </div>
  <div class="mb-3">
  <label for="name" class="form-label">Working Unit</label>
  <select class="form-select" aria-label="Default select example" name="place">
       <option value="diagnostic unit">Diagnostic Unit</option>
       <option value="ward">Ward</option>
  </select>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Working Unit Name</label>
    <input type="text" class="form-control" placeholder = "Enter Working Unit Name" name = "unit">
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
    $hours = $_POST['hours'];
    $name = $_POST['name'];
    $place = $_POST['place'];
    $unit = $_POST['unit'];

    $sql1 = "SELECT Employee_No FROM employee WHERE Name = '$name'";
    $run1 = mysqli_query($con,$sql1);

    while($row = mysqli_fetch_array($run1))
    {
        $empid = $row['Employee_No'];
        //echo $row['PCU_Id'];
    }

    if($place=="diagnostic unit"){
      $sql2 =  "SELECT PCU_Id FROM diagnostic_unit WHERE Unit_Name = '$unit'";
      $run2 = mysqli_query($con,$sql2);

      while($row = mysqli_fetch_array($run2))
    {
        $pcuid = $row['PCU_Id'];
        //echo $row['PCU_Id'];
    }
  
    }else{
      $sql2 =  "SELECT PCU_Id FROM ward WHERE Ward_Name = '$unit'";
      $run2 = mysqli_query($con,$sql2);

      while($row = mysqli_fetch_array($run2))
    {
        $pcuid = $row['PCU_Id'];
        //echo $row['PCU_Id'];
    }
    }
    $sql3 =  "INSERT INTO employee_assign(Employee_No,PCU_Id,Hours_Per_Week) VALUES ('$empid','$pcuid','$hours')";
    $run3 = mysqli_query($con,$sql3);

    if($run3)
    {
      header('Location:admin.php');
    }
   
  }
 
?>