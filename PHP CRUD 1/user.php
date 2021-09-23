<?php
   include 'connect.php';
   if(isset($_POST['submit']))
   {
       $name =$_POST['name'];
       $email =$_POST['email'];
       $contact = $_POST['contact'];
       $password =$_POST['password'];

       $sql = "INSERT INTO crud (Name,Email,Contact_Number,Password) VALUES('$name','$email','$contact','$password')";
       $result = mysqli_query($con,$sql);
       if($result)
       {
          // echo "Data inserted successfully";
          header('Location:display.php');
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

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method ="POST">
  <div class="mb-3">
    <label>Name</label>
    <input type="text" class="form-control" placeholder ="Enter your name" name = "name" autocomplete = "off">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder ="Enter your email" name = "email" autocomplete = "off">
  </div>
  <div class="mb-3">
    <label>Contact Number</label>
    <input type="text" class="form-control" placeholder ="Enter your contact number" name = "contact" autocomplete = "off">
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" placeholder ="Enter your password" name = "password" autocomplete = "off">
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
</form>
    </div>
 
  </body>
</html>