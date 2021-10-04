<?php

   include 'connect.php';
      $pid = $_GET['updateid'];

      $sql = "SELECT * FROM insuarance_company WHERE patient_Id = $pid";
      $result = mysqli_query($con,$sql);
     
      while($row = mysqli_fetch_array($result))
      {
        
        $bname = $row['Registered_Branch_Name'];
        $bcontactno = $row['Branch_Contact_No'];
        $baddress = $row['Branch_Address'];
        $fname = $row['IS_First_Name'];
        $lname = $row['IS_Last_Name'];
        $contact = $row['IS_Contact_No'];
        $relationship = $row['IS_Relationship'];
      }
        
  
   if(isset($_POST['submit']))
   {
    
    $bname = $_POST['bname'];
    $bcontactno = $_POST['bcontactno'];
    $baddress = $_POST['baddress'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $relationship = $_POST['relationship'];

       $sql1 = "UPDATE insuarance_company SET Registered_Branch_Name = '$bname', Branch_Contact_No = '$bcontactno',Branch_Address='$baddress',IS_First_Name='$fname',IS_Last_Name='$lname',IS_Contact_No='$contact',IS_Relationship='$relationship' WHERE patient_Id = '$pid' ";
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
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Update Patient Isurance Details</h1>
    <div class="container my-5">
    <form method = "POST">
    
  <div class="mb-3">
    <label for="name" class="form-label">Registered Branch Name</label>
    <input type="text" class="form-control" placeholder = "Enter Registered Branch Name" name = "bname" autocomplete = "off" value =<?php echo $bname;?>>
  </div>
    <div class="mb-3">
    <label for="name" class="form-label">Branch Address</label>
    <input type="text" class="form-control" placeholder = "Enter Branch Address" name = "baddress" autocomplete = "off" value =<?php echo $baddress;?>>
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Branch Contact Number</label>
    <input type="text" class="form-control" placeholder = "Enter Branch Contact Number" name = "bcontactno" autocomplete = "off" value =<?php echo $bcontactno;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Insurance Subscriber's First Name</label>
    <input type="text" class="form-control" placeholder = "Enter Insurance Subscriber's First Name" name = "fname" autocomplete = "off" value =<?php echo $fname;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Insurance Subscriber's Last Name</label>
    <input type="text" class="form-control" placeholder = "Enter Insurance Subscriber's Last Name" name = "lname" autocomplete = "off" value =<?php echo $lname;?>>
  </div>
    <div class="mb-3">
    <label for="name" class="form-label">Insurance Subscriber's Relationship</label>
    <input type="text" class="form-control" placeholder = "Enter Insurance Subscriber's Relationship to Patient" name = "relationship" autocomplete = "off" value =<?php echo $relationship;?>>
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Insurance Subscriber's Contact Number</label>
    <input type="text" class="form-control" placeholder = "Enter Insurance Subscriber's Contact Number" name = "contact" autocomplete = "off" value =<?php echo $contact;?>>
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  </body>
</html>