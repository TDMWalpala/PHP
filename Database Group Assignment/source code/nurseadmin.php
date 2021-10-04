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
            $_SESSION['Employee_No'] = $empno;
            //echo $_SESSION['Employee_No'];

          }
        }
        else
        {
          echo"abc";
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

    <title>Nurse Page</title>
  </head>
  <body>
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
<a href="findpatient.php"><button type="btn" class="btn btn-success">Add Record</button></a>
</div>
<div class="btn-group mx-3">
<a href="displayrecord.php"><button type="btn" class="btn btn-success">Display Records</button></a>
</div>
<div class="btn-group mx-3">
<a href="resign.php"><button type="btn" class="btn btn-success">Resign</button></a>
</div>
<div class="btn-group mx-3">
<a href="logout.php"><button type="btn" class="btn btn-danger">Log Out</button></a> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  </body>
</html>