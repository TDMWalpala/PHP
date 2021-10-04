
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Patient Unit</title>
  </head>
  <body>
  <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Patient Insurance Details Page</h1>
    <div class="container my-5">
    <form action="patientic.php" method = "POST">

    <div class="mb-3">
    <label for="name" class="form-label">Company Name</label>
    <input type="text" class="form-control" placeholder = "Enter Company Name" name = "cname">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Registered Branch Name</label>
    <input type="text" class="form-control" placeholder = "Enter Registered Branch Name" name = "bname">
  </div>
    <div class="mb-3">
    <label for="name" class="form-label">Branch Address</label>
    <input type="text" class="form-control" placeholder = "Enter Branch Address" name = "address">
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Branch Contact Number</label>
    <input type="text" class="form-control" placeholder = "Enter Branch Contact Number" name = "contact">
  </div>
  <div class="input-group mb-3">
  <div class="form-check">
  <input class="form-check-input " type="radio" name="subscriber" id="flexRadioDefault1" VALUE="true">
  <label class="form-check-label" for="flexRadioDefault1">
    Patient is Insurance Subscriber
  </label>
</div>
<div class="form-check">
  <input class="form-check-input ms-3" type="radio" name="subscriber" id="flexRadioDefault2" VALUE="false" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Insurance Subscriber is some oneelse 
  </label>
</div>
  </div>
   <div class="mb-3">
       <button type="submit" class="btn btn-primary w-100" name = 'submit'>Continue</button>
   </div>
</form>
  </div>
  </body>
</html>

<?php
  session_start();
  $pid=$_SESSION['patient_Id'];

  include 'connect.php';
  
  if(isset($_POST['submit']))
  {
    $cname = $_POST['cname'];
    $bname = $_POST['bname'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $subscriber = $_POST['subscriber'];

    if($subscriber=='true')
    {
        $sql1 =  "INSERT INTO insuarance_company(patient_Id,Registered_Branch_Name,Company_Name,Branch_Contact_No,Branch_Address) VALUES ('$pid','$bname','$cname','$contact','$address')";
        $run1 = mysqli_query($con,$sql1);
        if($run1){
            header('Location:admin.php');
        }
    }else{
        session_start();
        $_SESSION['patient_Id']=$pid;
        $_SESSION['cname']=$cname;
        $_SESSION['bname']=$bname;
        $_SESSION['address']=$address;
        $_SESSION['contact']=$contact;
        header('Location:subscriber.php');
    }
  }
 
?>