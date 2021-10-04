
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Treatment Unit</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Drug Recieve Page</h1>
    <div class="container my-5">
    <form action="drugsupply.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Supplier Registration Number</label>
    <input type="text" class="form-control" placeholder = "Enter Supplier Registration Number" name = "regno">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Drug Code</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Code" name = "code">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Supply Date</label>
    <input type="date" class="form-control" placeholder = "Enter Supply Date" name = "date">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Quantity</label>
    <input type="text" class="form-control" placeholder = "Enter Quantity" name = "quantity">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Drug Type</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Type" name = "type">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Drug Unit Cost</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Unit Cost" name = "cost">
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
    $regno = $_POST['regno'];
    $code = $_POST['code'];
    $date = $_POST['date'];
    $quantity = $_POST['quantity'];
    $type = $_POST['type'];
    $cost = $_POST['cost'];
    
    $sql1 =  "INSERT INTO drug_supply(Reg_No,Drug_Code,Supply_Date,Quantity,Drug_Type,Unit_Cost) VALUES ('$regno','$code','$date','$quantity','$type','$cost')";
    $run1 = mysqli_query($con,$sql1);

    if($run1)
    {
      header('Location:admin.php');
    }
   
  }
 
?>