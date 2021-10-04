<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnostic Unit Details</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">Diagnostic Unit Details</p>
      </div>
   </nav>
     
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Unit Number</th>
      <th scope="col">Unit Name</th>
      <th scope="col">PCU ID</th>
      <th scope="col">In charge Employee No</th>
      <th scope="col">In charge Employee Name</th>


    </tr>
  </thead>
  <tbody>
    <?php
     $sql = "SELECT * FROM diagnostic_unit";
     $result = mysqli_query($con,$sql);
     if($result)
     {
         while( $row = mysqli_fetch_assoc($result))
         {
             $unitno = $row['Unit_No'];
             $name = $row['Unit_Name'];
             $pcuid = $row['PCU_Id'];
            // $contact = $row['Contact_No'];
            $sql2 = "SELECT Employee_No FROM patient_care_unit WHERE PCU_Id = $pcuid";
            $run = mysqli_query($con,$sql2);
            while($row2 = mysqli_fetch_assoc($run))
            {
                $empno = $row2['Employee_No'];
                $sql3 = "SELECT Name FROM employee WHERE Employee_No = $empno";
                $run2 = mysqli_query($con,$sql3);
                while($row3 = mysqli_fetch_assoc($run2))
                {
                    $empname = $row3['Name'];
                }
            }

             echo '<tr>
             <th scope="row">'.$unitno.'</th>
             <td>'.$name.'</td>
             <td>'.$pcuid.'</td>
             <td>'.$empno.'</td>
             <td>'.$empname.'</td>
           </tr>';
         }
    }
    
    ?>
   
  </tbody>
</table>
    </div>
</body>
</html>