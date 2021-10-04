<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Details</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">Vendor Details</p>
      </div>
   </nav>
     
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Vendor Registration No</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Contact Number</th>

    </tr>
  </thead>
  <tbody>
    <?php
     $sql = "SELECT * FROM vendor";
     $result = mysqli_query($con,$sql);
     if($result)
     {
         while( $row = mysqli_fetch_assoc($result))
         {
             $regno = $row['Reg_No'];
             $name = $row['Name'];
             $address = $row['Address'];
             $contact = $row['Contact_No'];

             echo '<tr>
             <th scope="row">'.$regno.'</th>
             <td>'.$name.'</td>
             <td>'.$contact.'</td>
             <td>'.$address.'</td>
           </tr>';
         }
    }
    
    ?>
   
  </tbody>
</table>
    </div>
</body>
</html>