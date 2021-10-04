
<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insurance Details</title>
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
    <form action="icdu.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Patient Name</label>
    <input type="text" class="form-control" placeholder = "Enter Patient Name" name = "pname">
  </div>

   <div class="mb-3">
       <button type="submit" class="btn btn-primary w-100" name = 'submit'>Search</button>
   </div>
</form>
  </div>
     
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
     if(isset($_POST['submit']))
     {
       $pname = $_POST['pname'];
       $sql1 = "SELECT patient_Id FROM patient WHERE Patient_Name = '$pname'";
       $run1 = mysqli_query($con,$sql1);

       if($run1){
           while($row = mysqli_fetch_assoc($run1)){
            $pid = $row['patient_Id'];
           }
       }

       $sql2 = "SELECT * FROM insuarance_company WHERE patient_Id = '$pid'";
       $run2 = mysqli_query($con,$sql2);

       if($run2)
       {
        while($row = mysqli_fetch_assoc($run2))
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
            <td>
            <a href="updateic.php? updateid='.$pid.'" class="text-light" ><button  class = "btn btn-primary">Update</button></a>
            <a href="deleteic.php? deleteid='.$pid.'," class = "text-light"><button class = "btn btn-danger">Delete</button></a>
            
        </td>
          </tr>';
        }
       }     
    }

     ?>
   
  </tbody>
</table>
</div>
</body>
</html>