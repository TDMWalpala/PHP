<?php
   include 'connect.php';
      $regno = $_GET['updateno'];

      $sql = "SELECT * FROM vendor WHERE Reg_No = $regno";
      $result = mysqli_query($con,$sql);
      
      while($row = mysqli_fetch_array($result))
      {
        $name = $row['Name'];
        $contact = $row['Contact_No'];
        $address = $row['Address'];
      }
        
  
   if(isset($_POST['submit']))
   {
       $name =$_POST['fullname'];
       $address =$_POST['address'];
       $contact = $_POST['contact'];

       $sql1 = "UPDATE vendor SET Reg_No = $regno, Name = '$name', Contact_No = '$contact', Address = '$address' WHERE Reg_No = $regno";
       $result1 = mysqli_query($con,$sql1);
       if($result1)
       {
          //echo "Data inserted successfully";
          header('Location:displayvendor.php');
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

    <title>Update Vendor</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="displayvendor.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Update Vendor</h1>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Vendor Name</label>
    <input type="text" class="form-control" placeholder = "Enter your full name" name = "fullname" autocomplete = "off" value =<?php echo $name;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Address</label>
    <input type="text" class="form-control" placeholder = "Enter your address" name = "address" autocomplete = "off" value =<?php echo $address;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Contact Number</label>
    <input type="text" class="form-control" placeholder = "Enter your contact number" name = "contact" autocomplete = "off" value =<?php echo $contact;?>>
  </div>
  
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  </body>
</html>