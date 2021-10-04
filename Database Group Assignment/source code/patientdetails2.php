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
    <title>Display Patient Details</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="doctoradmin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">Patient Details</p>
      </div>
   </nav>
   <div class="container my-5">
    <form action="patientdetails2.php" method = "POST">

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
      <th scope="col">patient Id</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Birth_Date</th>
      <th scope="col">Patient_Type</th>
      <th scope="col">Bed_No</th>
      <th scope="col">Ward_No</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $pname = $_POST['pname'];

       $sql4 = "SELECT patient_Id FROM patient WHERE Patient_Name = '$pname'";
       $run4 = mysqli_query($con,$sql4);

       if($run4){
        while($row = mysqli_fetch_assoc($run4)){
          $pid = $row['patient_Id'];
        }
       }
       
       $sql1 = "SELECT * FROM patient WHERE Patient_Name = '$pname'";
       $run = mysqli_query($con,$sql1);

       $num = mysqli_num_rows($run);
       if($num>0)
       {
         //$valid =1;
       }
       else
       {
          $invalid=1;
       }

       if($run)
       {
        while($row = mysqli_fetch_assoc($run))
        {
            $pid = $row['patient_Id'];
            $pname = $row['Patient_Name'];
            $dob = $row['Birth_Date'];
            $ptype = $row['Patient_Type'];
            $bedno = $row['Bed_No'];
            session_start();
            $_SESSION['pid'] = $pid;
            $sql3 = "SELECT Ward_No FROM bed WHERE Bed_No = $bedno";
            $run3 = mysqli_query($con,$sql3);
            if($run3)
            {
                while($row3= mysqli_fetch_assoc($run3))
                {
                    $wardno = $row3['Ward_No'];
                }
            }
            echo '<tr>
            <th scope="row">'.$pid.'</th>
            <td>'.$pname.'</td>
            <td>'.$dob.'</td>
            <td>'.$ptype.'</td>
            <td>'.$bedno.'</td>
            <td>'.$wardno.'</td>
            <td>
        </td>
          </tr>';
        }
       }        
    }

     ?>
   
  </tbody>
</table>
</div>
     
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Employee<br>No</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Temperature<br>(celsius)</th>
      <th scope="col">Pulse<br>(per minute)</th>
      <th scope="col">Blood Pressure<br>(mmHg)</th>
      <th scope="col">Weight<br>(Kg)</th>
      <th scope="col">Symptoms</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       
       $sql1 = "SELECT * FROM patient_record WHERE patient_Id = '$pid'";
       $sql2 = "SELECT * FROM patient_symptom WHERE patient_Id = '$pid'";
       $run = mysqli_query($con,$sql1);
      

       $num = mysqli_num_rows($run);
       if($num>0)
       {
         $run2 = mysqli_query($con,$sql2);
       }
       else
       {
          $invalid=1;
       }
       
     if($run)
     {
         while( $row = mysqli_fetch_assoc($run))
         { $row2 = mysqli_fetch_assoc($run2);
             $empid = $row['Employee_No'];
             $date = $row['Date'];
             $time = $row['Time'];
             $temp = $row['Temperature'];
             $pulse = $row['Pulse'];
             $bp = $row['Blood_Pressure'];
             $weight = $row['Weight'];
             $symptoms = $row2['Symptom'];
             echo '<tr>
             <th scope="row">'.$empid.'</th>
             <td>'.$date.'</td>
             <td>'.$time.'</td>
             <td>'.$temp.'</td>
             <td>'.$pulse.'</td>
             <td>'.$bp.'</td>
             <td>'.$weight.'</td>
             <td>'.$symptoms.'</td>
           </tr>';
         }
    }
  } 
    
    ?>
   
  </tbody>
</table>
    </div>

    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Admitted Time</th>
      <th scope="col">Admitted Date</th>
      <th scope="col">Discharged Time</th>
      <th scope="col">Discahrged Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {

       $sql3 = "SELECT * FROM in_patient WHERE patient_Id = '$pid'";
       $run3 = mysqli_query($con,$sql1);
      

       $num = mysqli_num_rows($run3);
       if($num>0)
       {
         $run3 = mysqli_query($con,$sql3);
       }
       else
       {
          $invalid=1;
       }
       
     if($run3)
     {
         while( $row3 = mysqli_fetch_assoc($run3))
         {    
             $adate = $row3['Admitted_Time'];
             $atime = $row3['Admitted_Date'];
             $ddate = $row3['Discharged_Time'];
             $dtime = $row3['Discharged_Date'];
             
             echo '<tr>
             <td>'.$atime.'</td>
             <td>'.$adate.'</td>
             <td>'.$dtime.'</td>
             <td>'.$ddate.'</td>
           </tr>';
         }
    }
  } 
    
    ?>
   
  </tbody>
</table>
    </div>
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
    <th scope="col">Employee_No</th>
      <th scope="col">Diagnose_Code</th>
      <th scope="col">Diagnose_Name</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $pname = $_POST['pname'];
       $sql4 = "SELECT patient_Id FROM patient WHERE Patient_Name = '$pname'";
       $run4 = mysqli_query($con,$sql4);
       if($run4)
       {    while($row = mysqli_fetch_assoc($run4))
            {
              $pid = $row['patient_Id'];
            
            }
            $sql3 = "SELECT * FROM diagnose WHERE patient_Id = '$pid'";
            $run3 = mysqli_query($con,$sql1);
           
     
            $num = mysqli_num_rows($run3);
            if($num>0)
            {
              $run3 = mysqli_query($con,$sql3);
            }
            else
            {
               $invalid=1;
            }
            
            if($run3)
            {
                while( $row3 = mysqli_fetch_assoc($run3))
                {    
                    $dcode = $row3['Diagnose_Code'];
                    $dname = $row3['Diagnose_Name'];
                    $date = $row3['Date'];
                    $time = $row3['Time'];
                    $description = $row3['Description'];
                    $empno = $row3['Employee_No'];
                    
                    echo '<tr>
                    <td>'.$empno.'</td>
                    <td>'.$dcode.'</td>
                    <td>'.$dname.'</td>
                    <td>'.$date.'</td>
                    <td>'.$time.'</td>
                    <td>'.$description.'</td>
                  </tr>';
                }
            }      
         }
     
      }else{
        die(mysqli_error($con));
      } 
    
    ?>
   
  </tbody>
</table>
    </div>
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
    <th scope="col">Employee_No</th>
      <th scope="col">Treatment_No</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $pname = $_POST['pname'];
       $sql4 = "SELECT patient_Id FROM patient WHERE Patient_Name = '$pname'";
       $run4 = mysqli_query($con,$sql4);
       if($run4)
       {    while($row = mysqli_fetch_assoc($run4))
            {
              $pid = $row['patient_Id'];
            
            }
            $sql3 = "SELECT * FROM patient_treat WHERE patient_Id = '$pid'";
            $run3 = mysqli_query($con,$sql1);
           
     
            $num = mysqli_num_rows($run3);
            if($num>0)
            {
              $run3 = mysqli_query($con,$sql3);
            }
            else
            {
               $invalid=1;
            }
            
            if($run3)
            {
                while( $row3 = mysqli_fetch_assoc($run3))
                {    
                    $empno = $row3['Employee_No'];
                    $tnum = $row3['Treatment_No'];
                    $date = $row3['Date'];
                    $time = $row3['Time'];
                    
                    echo '<tr>
                    <td>'.$empno.'</td>
                    <td>'.$tnum.'</td>
                    <td>'.$date.'</td>
                    <td>'.$time.'</td>
                  </tr>';
                }
            }      
         }
     
      }else{
        die(mysqli_error($con));
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