<?php
   include 'connect.php';
   $invalid=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Update or Delete Ward</title>
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
    <form action="remove&updateward.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Ward Number</label>
    <input type="number" class="form-control" placeholder = "Enter Ward Number" name = "wardno">
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
      <th scope="col">Ward Number</th>
      <th scope="col">Ward Name</th>
      <th scope="col">PCU ID</th>
      <th scope="col">Incharge Employee Number</th>
      <th scope="col">Incharge Employee Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $wardno = $_POST['wardno'];
       $sql1 = "SELECT * FROM ward WHERE Ward_No = '$wardno'";
       $run = mysqli_query($con,$sql1);

       $num = mysqli_num_rows($run);
       if($num>0)
       {
         // $valid =1;
       }
       else
       {
          $invalid=1;
       }

       if($run)
       {
        while($row = mysqli_fetch_assoc($run))
        {
            
            $wardno = $row['Ward_No'];
            $wardname = $row['Ward_Name'];
            $pcuid = $row['PCU_Id'];
            session_start();
            $_SESSION['pcu_id'] = $pcuid;
           // $address = $row['Address'];
           $sql2= "SELECT Employee_No FROM  patient_care_unit WHERE PCU_Id = $pcuid";
           $run2 = mysqli_query($con,$sql2);
           if($run2)
           {
               while($row2=mysqli_fetch_assoc($run2))
               {
                   $empno = $row2['Employee_No'];
                   $_SESSION['empno'] = $empno;

                   $sql3 = "SELECT 	Name FROM employee WHERE Employee_No = $empno";
                   $run3 = mysqli_query($con,$sql3);
                   if($run3)
                   {
                       while($row3 = mysqli_fetch_assoc($run3))
                       {
                           $empname = $row3['Name'];
                       }
                   }
               }
           }

            echo '<tr>
            <th scope="row">'.$wardno.'</th>
            <td>'.$wardname.'</td>
            <td>'.$pcuid.'</td>
            <td>'.$empno.'</td>
            <td>'.$empname.'</td>
            <td>
            <a href="updateward.php? updateno='.$wardno.'" class="text-light" ><button  class = "btn btn-primary">Update</button></a>
            <a href="deleteward.php? deleteno='.$wardno.'" class = "text-light"><button class = "btn btn-danger">Close</button></a>
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
<?php 
          if($invalid)
          {
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error </strong> Invalid ward Number.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          } 
    ?>
</div>
</body>
</html>