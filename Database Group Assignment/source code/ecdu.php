
<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Emergency Contact Details</title>
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
    <form action="ecdu.php" method = "POST">

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
      <th scope="col">Contact No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Relationship</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $user=0;
     if(isset($_POST['submit']))
     {
       $pname = $_POST['pname'];
       $sql1 = "SELECT patient_Id FROM patient WHERE Patient_Name = '$pname'";
       $run1 = mysqli_query($con,$sql1);

       $num = mysqli_num_rows($run1);
             
        if($num=0){
         $user=1;
        }

       if($run1){
           while($row = mysqli_fetch_assoc($run1)){
            $pid = $row['patient_Id'];
           }
       }else{
        die(mysqli_error($con));
       }

       $sql2 = "SELECT * FROM emegency_contact WHERE patient_Id = '$pid'";
       $run2 = mysqli_query($con,$sql2);

       if($run2)
       {
        while($row = mysqli_fetch_assoc($run2))
        {
            $contact = $row['Contact_No'];
            $fname = $row['First_Name'];
            $lname = $row['Last_Name'];
            $relationship = $row['Relationship'];
            $address = $row['Address'];
            
            
            $_SESSION['Contact_No']=$contact;
            $_SESSION['patient_Id']=$pid;
            echo '<tr>
             <th scope="row">'.$pid.'</th>
             <td>'.$contact.'</td>
             <td>'.$fname.'</td>
             <td>'.$lname.'</td>
             <td>'.$relationship.'</td>
             <td>'.$address.'</td>
            <td>
            <a href="updateec.php? updateid='.$pid.'" class="text-light" ><button  class = "btn btn-primary">Update</button></a>
            <a href="addpatientec.php? addid='.$pid.'" class = "text-light"><button class = "btn btn-primary">ADD</button></a>
            <a href="deleteec.php? deleteid='.$pid.'," class = "text-light"><button class = "btn btn-danger">Delete</button></a>
            
        </td>
          </tr>';
        }
       }        
    }

     ?>
   
  </tbody>
</table>
</div>
<?php
  if($user)
         {
           echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error! </strong> User already exist.
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
         }
  ?>
</body>
</html>