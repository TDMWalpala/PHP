
<?php
   include 'connect.php';
      session_start();
      $empno = $_SESSION['empno'];
      $unitno = $_GET['updateno'];
      $invalid = 0;
      $sql2= "SELECT Name FROM employee WHERE Employee_No=$empno";
      $result2 = mysqli_query($con,$sql2);
      
      $sql = "SELECT * FROM diagnostic_unit WHERE Unit_No = $unitno";
      $result = mysqli_query($con,$sql);
      
      while($row = mysqli_fetch_array($result))
      {
        $unitname = $row['Unit_Name'];
        $pcuid = $row['PCU_Id'];
      }
        
   if(isset($_POST['submit']))
   {
       $unitname =$_POST['unitname'];

       $newempno = $_POST['newempno'];

       $sql4= "SELECT * FROM employee WHERE Employee_No = '$newempno'";
       $result4 = mysqli_query($con,$sql4);

       $num = mysqli_num_rows($result4);

       if(!$num>0)
       {
           $invalid =1;
       }
      
       $sql1 = "UPDATE diagnostic_unit SET Unit_Name = '$unitname' WHERE Unit_No = $unitno";
       $result1 = mysqli_query($con,$sql1);

       $sql3 = "UPDATE patient_care_unit SET Employee_No =$newempno WHERE PCU_Id = $pcuid";
       $result3 = mysqli_query($con,$sql3);

       if($result1&&$result3&&$num>0)
       {
          //echo "Data inserted successfully";
          header('Location:displaydiaunit.php');
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

    <title>Update Diagnostic Unit</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="remove&updatediaunit.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Update Diagnostic Unit</h1>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Unit Name</label>
    <input type="text" class="form-control" placeholder = "Enter  new ward name" name = "unitname" autocomplete = "off" value =<?php echo $unitname;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">In Charge Employee Number</label>
    <input type="text" class="form-control" placeholder = "Enter New In Charge employee number" name = "newempno" autocomplete = "off" value =<?php echo $empno;?>>
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  <div class="container">
  <?php
         if($invalid)
         {
           echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error! </strong>Invalid Employee Number.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
         }   
    ?>
  </div>
  </body>
</html>