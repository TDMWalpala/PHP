<?php
   include 'connect.php';
   $invalid =0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Records</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="nurseadmin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">Record</p>
      </div>
   </nav>
   <div class="container my-5">
    <form action="displayrecord.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Patient Name</label>
    <input type="text" class="form-control" placeholder = "Enter Patient Name" name = "name">
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
      <th scope="col">Employee No</th>
      <th scope="col">Patient_Id</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Temperature (celsius)</th>
      <th scope="col">Pulse (per minute)</th>
      <th scope="col">Blood Pressure (mmHg)</th>
      <th scope="col">Weight (Kg)</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $name = $_POST['name'];
       $sql2 = "SELECT patient_Id FROM patient WHERE Patient_Name = '$name'";
       $run2 = mysqli_query($con,$sql2);
       if($run2){
         while($row = mysqli_fetch_assoc($run2)){
           $pid=$row['patient_Id'];

           $sql1 = "SELECT * FROM patient_record WHERE patient_Id = '$pid'";
       $run = mysqli_query($con,$sql1);

       $num = mysqli_num_rows($run);
       if($num>0)
       {

       }
       else
       {
          $invalid=1;
       }
       
     if($run)
     {
         while( $row = mysqli_fetch_assoc($run))
         {
             $empid = $row['Employee_No'];
             $pid = $row['Patient_Id'];
             $date = $row['Date'];
             $time = $row['Time'];
             $temp = $row['Temperature'];
             $pulse = $row['Pulse'];
             $bp = $row['Blood_Pressure'];
             $weight = $row['Weight'];
             echo '<tr>
             <th scope="row">'.$empid.'</th>
             <td>'.$pid.'</td>
             <td>'.$date.'</td>
             <td>'.$time.'</td>
             <td>'.$temp.'</td>
             <td>'.$pulse.'</td>
             <td>'.$bp.'</td>
             <td>'.$weight.'</td>
           </tr>';
         }
    }
         }
         
       }
       
  } 
    
    ?>
   
  </tbody>
</table>
    </div>
    <div class="container">
<?php 
          if($invalid)
          {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error </strong> Invalid Patient Id Number.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          } 
    ?>
</div>
</body>
</html>