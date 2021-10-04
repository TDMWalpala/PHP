<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Patient Emergency Contact Details</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">In Patient Emergency Contact Details</p>
      </div>
   </nav>
     
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Patient Id</th>
      <th scope="col">Contact No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Relationship</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $sql = "SELECT * FROM emegency_contact";
     $result = mysqli_query($con,$sql);
     if($result)
     {
         while( $row = mysqli_fetch_assoc($result))
         {
             $pid = $row['patient_Id'];
             $contact = $row['Contact_No'];
             $fname = $row['First_Name'];
             $lname = $row['Last_Name'];
             $relationship = $row['Relationship'];
             $address = $row['Address'];
             echo '<tr>
             <th scope="row">'.$pid.'</th>
             <td>'.$contact.'</td>
             <td>'.$fname.'</td>
             <td>'.$lname.'</td>
             <td>'.$relationship.'</td>
             <td>'.$address.'</td>
           </tr>';
         }
    }
    
    ?>
   
  </tbody>
</table>
<a href="displayinsurance.php"><button type="btn" class="btn btn-primary">Next</button></a>
    </div>
</body>
</html>