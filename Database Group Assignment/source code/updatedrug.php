<?php
   include 'connect.php';
      $no = $_GET['updateid'];

      $sql1 = "SELECT * FROM drug WHERE Treatment_No = $no";
      $result1 = mysqli_query($con,$sql1);
      
      while($row = mysqli_fetch_array($result1))
      {
        $code = $row['Drug_Code'];
        $type = $row['Drug_Type'];
        $cost = $row['Unit_Cost'];
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
       $type =$_POST['type'];
       $cost =$_POST['cost'];

       $sql2 = "UPDATE drug SET Drug_Code = '$code',Drug_Type = '$type',Unit_Cost = $cost  WHERE Treatment_No = $no";
       $result2 = mysqli_query($con,$sql2);

       $sql3 = "UPDATE treatment SET TName='$name' WHERE Treatment_No = $no";
       $result3 = mysqli_query($con,$sql3);

       if($result1&&$result3)
       {
          //echo "Data inserted successfully";
          header('Location:displaydrug.php');
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

    <title>Update Drug</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="addmin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Bed No</h1>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Drug Name</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Name" name = "name" autocomplete = "off" value =<?php echo $name;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Drug Code</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Code" name = "code" autocomplete = "off" value =<?php echo $code;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Drug Type</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Type" name = "type" autocomplete = "off" value =<?php echo $type;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Drug Unit Cost</label>
    <input type="text" class="form-control" placeholder = "Enter Drug Unit Cost" name = "cost" autocomplete = "off" value =<?php echo $cost;?>>
  </div>
  
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  </body>
</html>