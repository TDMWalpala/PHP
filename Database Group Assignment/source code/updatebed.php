<?php
   include 'connect.php';
      $bedno = $_GET['updateid'];

      $sql = "SELECT * FROM bed WHERE Bed_No = $bedno";
      $result = mysqli_query($con,$sql);
      
      while($row = mysqli_fetch_array($result))
      {
        $bedno = $row['Bed_No'];
        $wardno = $row['Ward_No'];
      }
        
  
   if(isset($_POST['submit']))
   {
       $wardno =$_POST['wardno'];

       $sql1 = "UPDATE bed SET Ward_No = $wardno  WHERE Bed_No = $bedno";
       $result1 = mysqli_query($con,$sql1);
       if($result1)
       {
          //echo "Data inserted successfully";
          header('Location:displaybed.php');
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

    <title>Update Bed</title>
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
    <label for="name" class="form-label">Ward Number</label>
    <input type="text" class="form-control" placeholder = "Enter ward number" name = "wardno" autocomplete = "off" value =<?php echo $wardno;?>>
  </div>
  
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  </body>
</html>