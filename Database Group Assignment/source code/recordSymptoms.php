<?php
session_start();
$empno = $_SESSION['Employee_No'];
$pid = $_SESSION['pid'];

     if($_SERVER['REQUEST_METHOD']=='POST')
     {
         include 'connect.php';
         $symptoms = $_POST['Symtoms'];
         
       
          $sql =  "INSERT INTO  patient_symptom (Employee_No,Patient_Id,Symptom) VALUES ('$empno','$pid','$symptoms')";
          $result = mysqli_query($con,$sql);
          
          if($result)
          {
            header('Location:nurseadmin.php');
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

    <title>Add Symptoms</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="findpatient.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Add Symptoms</h1>
    <div class="container my-5">
    <form action="recordSymptoms.php" method = "POST">

  <div class="form-floating">
  <textarea class="form-control" placeholder="Write Symptoms" id="floatingTextarea2" name = "Symtoms" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Symptoms</label>
</div>
  <div class="mb-3 mt-3">
  <button type="submit" class="btn btn-primary w-100">Add</button>
  </div> 
</form>
  </div>
  </body>
</html>
