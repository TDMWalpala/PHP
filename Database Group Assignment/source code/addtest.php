
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
    <h1 class = "text-center">Test Page</h1>
    <div class="container my-5">
    <form action="addtest.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Test Code</label>
    <input type="text" class="form-control" placeholder = "Enter Test Code" name = "code">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Test Name</label>
    <input type="text" class="form-control" placeholder = "Enter Test Name" name = "name">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Test Cost</label>
    <input type="text" class="form-control" placeholder = "Enter Test Cost" name = "cost">
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

    $sql3 =  "INSERT INTO test(Test_Code,Cost,Treatment_No) VALUES ('$code','$cost','$no')";
    $run3 = mysqli_query($con,$sql3);

    if($run3)
    {
      header('Location:admin.php');
    }
   
  }
 
?>