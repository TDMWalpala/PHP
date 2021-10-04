<?php
   include 'connect.php';
   session_start();
   $empno=$_SESSION['Employee_No'];
        
   if(isset($_POST['submit']))
   {
       $rdate =$_POST['rdate'];

       $sql1 = "UPDATE medical_staff SET Resign_Date = '$rdate' WHERE Employee_No = $empno";
       $result1 = mysqli_query($con,$sql1);
       if($result1)
       {
        $sql2 = "DELETE FROM user WHERE Employee_No = $empno";
        $result2 = mysqli_query($con,$sql2);
          header('Location:index.php');
       }
       else
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

    <title>Resign Page</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Resign</h1>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Resign Date</label>
    <input type="date" class="form-control" placeholder = "Enter Resign Date" name = "rdate" >
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Resign</button>
  </div> 
</form>
  </div>
  </body>
</html>