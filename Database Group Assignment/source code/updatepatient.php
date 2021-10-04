<?php
   include 'connect.php';
      $pid = $_GET['updateid'];

      $sql = "SELECT * FROM patient WHERE patient_Id = $pid";
      $result = mysqli_query($con,$sql);
      
      while($row = mysqli_fetch_array($result))
      {
        $name = $row['Patient_Name'];
        $dob = $row['Birth_Date'];
        $bedno = $row['Bed_No'];
        $ptype = $row['Patient_Type'];
      }
        
  if($ptype=='in patient'){
   if(isset($_POST['submit']))
   {
       $name =$_POST['name'];
       $dob =$_POST['dob'];
       $bedno = $_POST['bedno'];

       $sql1 = "UPDATE patient SET Patient_Name = '$name', Birth_Date = '$dob', Bed_No = '$bedno' WHERE patient_Id = $pid";
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
  }else{
    if(isset($_POST['submit']))
   {
       $name =$_POST['name'];
       $dob =$_POST['dob'];
       $bedno = $_POST['bedno'];

       $sql1 = "UPDATE patient SET Patient_Name = '$name', Birth_Date = '$dob' WHERE patient_Id = $pid";
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
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Update Patient</h1>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Patient Name</label>
    <input type="text" class="form-control" placeholder = "Enter Patient Name" name = "name" autocomplete = "off" value =<?php echo $name;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Patient Birth Date</label>
    <input type="date" class="form-control" placeholder = "Enter Patient Birth Date" name = "dob" autocomplete = "off" value =<?php echo $dob;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Patient Bed Number</label>
    <input type="number" class="form-control" placeholder = "Enter Patient Bed Number" name = "bedno" autocomplete = "off" value =<?php echo $bedno;?>>
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  </body>
</html>