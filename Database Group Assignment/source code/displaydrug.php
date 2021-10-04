<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug Details</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="admin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">Drug Details</p>
      </div>
   </nav>
     
    <div class="container">
        <!--<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a></button>-->
    <table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">Treatment No</th>
      <th scope="col">Drug Name</th>
      <th scope="col">Drug Code</th>
      <th scope="col">Drug Type</th>
      <th scope="col">Unit Cost</th>
    </tr>
  </thead>
  <tbody>
    <?php
     $sql1 = "SELECT * FROM drug";
     $result1 = mysqli_query($con,$sql1);
     
     if($result1)
     {
         while( $row = mysqli_fetch_assoc($result1))
         {
             $no = $row['Treatment_No'];
             $code = $row['Drug_Code'];
             $type = $row['Drug_Type'];
             $cost = $row['Unit_Cost'];

            $sql2 = "SELECT TName FROM treatment where Treatment_No='$no'";
            $result2 = mysqli_query($con,$sql2);

            while($row = mysqli_fetch_array($result2))
            {
                $name = $row['TName'];
            }
            
            echo '<tr>
            <th scope="row">'.$no.'</th>
            <td>'.$name.'</td>
            <td>'.$code.'</td>
            <td>'.$type.'</td>
            <td>'.$cost.'</td>
           </tr>';
         }
    }
    
    ?>
   
  </tbody>
</table>
    </div>
</body>
</html>