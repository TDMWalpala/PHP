<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Patient Insurance Details</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">In Patient Insurance Details</p>
      </div>
   </nav>
     
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Patient Id</th>
      <th scope="col">Registered Branch Name</th>
      <th scope="col">Company Name</th>
      <th scope="col">Branch Contact No</th>
      <th scope="col">Branch Address</th>
      <th scope="col">IS First Name</th>
      <th scope="col">IS Last Name</th>
      <th scope="col">IS Contact Number</th>
      <th scope="col">IS Relationship</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $sql = "SELECT * FROM insuarance_company";
     $result = mysqli_query($con,$sql);
     if($result)
     {
         while( $row = mysqli_fetch_assoc($result))
         {
             $pid = $row['patient_Id'];
             $bname = $row['Registered_Branch_Name'];
             $cname = $row['Company_Name'];
             $bcontactno = $row['Branch_Contact_No'];
             $baddress = $row['Branch_Address'];
             $fname = $row['IS_First_Name'];
             $lname = $row['IS_Last_Name'];
             $contact = $row['IS_Contact_No'];
             $relationship = $row['IS_Relationship'];
             echo '<tr>
             <th scope="row">'.$pid.'</th>
             <td>'.$bname.'</td>
             <td>'.$cname.'</td>
             <td>'.$bcontactno.'</td>
             <td>'.$baddress.'</td>
             <td>'.$fname.'</td>
             <td>'.$lname.'</td>
             <td>'.$contact.'</td>
             <td>'.$relationship.'</td>
           </tr>';
         }
    }
    
    ?>
   
  </tbody>
</table>
<a href="displayoutpatient.php"><button type="btn" class="btn btn-primary">Next</button></a>
    </div>
</body>
</html>