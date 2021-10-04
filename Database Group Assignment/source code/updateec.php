<?php
session_start();
$contact=$_SESSION['Contact_No'];
   include 'connect.php';
      $pid = $_GET['updateid'];

      $sql = "SELECT * FROM emegency_contact WHERE patient_Id = $pid and Contact_No='$contact'";
      $result = mysqli_query($con,$sql);
      
      while($row = mysqli_fetch_array($result))
      {
        $fname = $row['First_Name'];
        $lname = $row['Last_Name'];
        $relationship = $row['Relationship'];
        $address = $row['Address'];
      }
        
  
   if(isset($_POST['submit']))
   {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $relationship = $_POST['relationship'];
        $address = $_POST['address'];

       $sql1 = "UPDATE emegency_contact SET First_Name = '$fname', Last_Name = '$lname', Relationship = '$relationship', Address = '$address' WHERE patient_Id = '$pid' and Contact_No='$contact'";
       $result1 = mysqli_query($con,$sql1);
       if($result1)
       {
          //echo "Data inserted successfully";
          header('Location:admin.php');
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

    <title>Update Patient</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="addmin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Update Emergency Contact</h1>
    <div class="container my-5">
    <form method = "POST">
    <div class="mb-3">
    <label for="name" class="form-label">First Name</label>
    <input type="text" class="form-control" placeholder = "Enter First Name" name = "fname" autocomplete = "off" value =<?php echo $fname;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder = "Enter Last Name" name = "lname" autocomplete = "off" value =<?php echo $lname;?>>
  </div>
    <div class="mb-3">
    <label for="name" class="form-label">Relationship</label>
    <input type="text" class="form-control" placeholder = "Enter Relationship to Patient" name = "relationship" autocomplete = "off" value =<?php echo $relationship;?>>
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Address</label>
    <input type="text" class="form-control" placeholder = "Enter Address" name = "address" autocomplete = "off" value =<?php echo $address;?>>
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  </body>
</html>