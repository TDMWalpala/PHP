
<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
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
    <form action="patientdu.php" method = "POST">

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
      <th scope="col">Name</th>
      <th scope="col">DOB</th>
      <th scope="col">Type</th>
      <th scope="col">Bed No</th>
      <th scope="col">Admited Doctor Employee No</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $pname = $_POST['pname'];
       $sql1 = "SELECT * FROM patient WHERE Patient_Name = '$pname'";
       $run = mysqli_query($con,$sql1);

       if($run)
       {
        while($row = mysqli_fetch_assoc($run))
        {
            $pid = $row['patient_Id'];
            $name = $row['Patient_Name'];
            $dob = $row['Birth_Date'];
            $type = $row['Patient_Type'];
            $bedno = $row['Bed_No'];
            $empno = $row['Employee_No'];
            
            echo '<tr>
             <th scope="row">'.$pid.'</th>
             <td>'.$name.'</td>
             <td>'.$dob.'</td>
             <td>'.$type.'</td>
             <td>'.$bedno.'</td>
             <td>'.$empno.'</td>
            <td>
            <a href="updatepatient.php? updateid='.$pid.'" class="text-light" ><button  class = "btn btn-primary">Update</button></a>
            <a href="deletepatient.php? deleteid='.$pid.'" class = "text-light"><button class = "btn btn-danger">Delete</button></a>
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