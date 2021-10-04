
<?php
session_start();
$username=$_SESSION['username'];
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Details</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">Delete or Update</p>
      </div>
   </nav>

   <div class="container my-5">
    <form action="admindu.php" method = "POST">
     
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php

       $sql1 = "SELECT * FROM user WHERE User_Name = '$username'";
       $run1 = mysqli_query($con,$sql1);

       if($run1)
       {
        while($row = mysqli_fetch_assoc($run1))
        {
            $password = $row['Password'];
            $userid = $row['userid'];
        }
            
        echo '<tr>
        <th scope="row">'.$username.'</th>
        <td>'.$password.'</td>
        <td>
        <a href="updateadmin.php? updateid='.$userid.'" class="text-light" ><button  class = "btn btn-primary">Update</button></a>
        <a href="removeadmin.php? deleteid='.$userid.'" class = "text-light"><button class = "btn btn-danger">Delete</button></a>
        </td>
          </tr>';
        }
               
    

     ?>
   
  </tbody>
</table>
</div>
</body>
</html>