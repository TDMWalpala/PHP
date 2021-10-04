
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
    <h1 class = "text-center">Drug Page</h1>
    <div class="container my-5">
    <form action="adddrug.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Drug Code</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Code" name = "code">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Drug Name</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Name" name = "name">
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
    $code = $_POST['code'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $cost = $_POST['cost'];
    
    $sql1 =  "INSERT INTO treatment(TName) VALUES ('$name')";
    $run1 = mysqli_query($con,$sql1);

    $sql2 = "SELECT Treatment_No FROM treatment WHERE TName = '$name'";
    $run2 = mysqli_query($con,$sql2);

    while($row = mysqli_fetch_array($run2))
    {
        $no = $row['Treatment_No'];
        //echo $row['PCU_Id'];
    }

    $sql3 =  "INSERT INTO drug(Drug_Code,Drug_Type,Unit_Cost,Treatment_No) VALUES ('$code','$type','$cost','$no')";
    $run3 = mysqli_query($con,$sql3);

    if($run3)
    {
      header('Location:admin.php');
    }
   
  }
 
?>