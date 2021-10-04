
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
    <h1 class = "text-center">Bed Page</h1>
    <div class="container my-5">
    <form action="addbed.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Ward Number</label>
    <input type="text" class="form-control" placeholder = "Enter Ward Number" name = "wardno">
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
    $wardno = $_POST['wardno'];
    
    $sql =  "INSERT INTO bed(Ward_No) VALUES ('$wardno')";
    $run = mysqli_query($con,$sql);

    if($run)
    {
      header('Location:admin.php');
    }
   
  }
 
?>