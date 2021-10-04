<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Vendor</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Vendor Page</h1>
    <div class="container my-5">
    <form action="addvendor.php" method = "POST">

    <div class="mb-3">
    <label for="name" class="form-label">Vendor Registration Number</label>
    <input type="text" class="form-control" placeholder = "Enter vendor registration number" name = "regno">
  </div>



  <div class="mb-3">
    <label for="name" class="form-label">Vendor Name</label>
    <input type="text" class="form-control" placeholder = "Enter vendor Name" name = "name">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Vender Address</label>
    <input type="text" class="form-control" placeholder = "Enter vendor address" name = "address">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Vendor Contact Number</label>
    <input type="text" class="form-control" placeholder = "Enter vendor contact number" name = "contactno">
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
    $regno = $_POST['regno'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    
    
    $sql =  "INSERT INTO vendor(Reg_No,Name,Address,Contact_No) VALUES ('$regno','$name','$address','$contactno')";
    $run = mysqli_query($con,$sql);


    if($run)
    {
      header('Location:admin.php');
    }
   
  }
 
?>