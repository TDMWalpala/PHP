<?php
   include 'connect.php';
      $no = $_GET['updateid'];

      $sql1 = "SELECT * FROM test WHERE Treatment_No = $no";
      $result1 = mysqli_query($con,$sql1);
      
      while($row = mysqli_fetch_array($result1))
      {
        $code = $row['Test_Code'];
        $cost = $row['Cost'];
      }

      $sql4 = "SELECT TName FROM treatment WHERE Treatment_No = $no";
      $result4 = mysqli_query($con,$sql4);
      
      while($row = mysqli_fetch_array($result4))
      {
        $name = $row['TName'];
      }
        
  
   if(isset($_POST['submit']))
   {
       $name =$_POST['name'];
       $code =$_POST['code'];
       $cost =$_POST['cost'];

       $sql2 = "UPDATE test SET Test_Code = $code,Cost = $cost  WHERE Treatment_No = $no";
       $result2 = mysqli_query($con,$sql2);

       $sql3 = "UPDATE treatment SET TName='$name' WHERE Treatment_No = $no";
       $result3 = mysqli_query($con,$sql3);

       if($result1&&$result3)
       {
          //echo "Data inserted successfully";
          header('Location:displaytest.php');
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

    <title>Update Test</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Bed No</h1>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Test Name</label>
    <input type="text" class="form-control" placeholder = "Enter Test Name" name = "name" autocomplete = "off" value =<?php echo $name;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Test Code</label>
    <input type="text" class="form-control" placeholder = "Enter Test Code" name = "code" autocomplete = "off" value =<?php echo $code;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Test Cost</label>
    <input type="text" class="form-control" placeholder = "Enter Test Cost" name = "cost" autocomplete = "off" value =<?php echo $cost;?>>
  </div>
  
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  </body>
</html>