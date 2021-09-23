<?php
   include 'connect.php';
   $id = $_GET['updateid'];
   $sql = "SELECT * FROM crud WHERE ID = $id";
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_assoc($result);
   $name = $row['Name'];
   $email = $row['Email'];
   $contact = $row['Contact_Number'];
  $password = $row['Password'];
  
   if(isset($_POST['submit']))
   {
       $name =$_POST['name'];
       $email =$_POST['email'];
       $contact = $_POST['contact'];
       $password =$_POST['password'];

       $sql = "UPDATE crud SET ID = $id,Name = '$name', Email ='$email', Contact_Number = '$contact', Password = '$password' WHERE ID = $id";
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
    <input type="text" class="form-control" placeholder ="Enter your name" name = "name" autocomplete = "off" value =<?php echo $name;?>  >
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" class="form-control" placeholder ="Enter your email" name = "email" autocomplete = "off"value =<?php echo $email;?> >
  </div>
  <div class="mb-3">
    <label>Contact Number</label>
    <input type="text" class="form-control" placeholder ="Enter your contact number" name = "contact" autocomplete = "off" value =<?php echo $contact;?> >
  </div>
  <div class="mb-3">
    <label>Password</label>
    <input type="text" class="form-control" placeholder ="Enter your password" name = "password" autocomplete = "off" value =<?php echo $password;?> >
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Update</button>
</form>
    </div>
 
  </body>
</html>