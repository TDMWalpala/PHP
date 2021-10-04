<?php
   include 'connect.php';
      $userid = $_GET['updateid'];

      $sql = "SELECT Password FROM user WHERE userid = $userid";
      $result = mysqli_query($con,$sql);
      
      while($row = mysqli_fetch_array($result))
      {
        $password = $row['Password'];
      }
        
  
   if(isset($_POST['submit']))
   {
       $password =$_POST['password'];

       $sql1 = "UPDATE user SET Password = '$password' WHERE userid = $userid";
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

    <title>Edit Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
      </div>
   </nav>
    <h1 class = "text-center">Edit Admin</h1>
    <div class="container my-5">
    <form method = "POST">
  <div class="mb-3">
    <label for="name" class="form-label">Password</label>
    <input type="text" class="form-control" placeholder = "Enter New Password" name = "password" autocomplete = "off" value =<?php echo $password;?>>
  </div>
  <div class="mb-3">
  <button type="submit" class="btn btn-primary w-100" name ="submit">Update</button>
  </div> 
</form>
  </div>
  </body>
</html>