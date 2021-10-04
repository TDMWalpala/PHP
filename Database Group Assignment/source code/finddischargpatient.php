
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
    <title>Discharge Patient</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="doctoradmin.php">
        <img src="./imgs/back.png" alt="" width="35" height="35">
        </a>
        <p class="h3">Discharge Patient</p>
      </div>
   </nav>

   <div class="container my-5">
    <form action="finddischargpatient.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Patient Name</label>
    <input type="name" class="form-control" placeholder = "Enter Patient Name" name = "name">
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

          session_start();
          $_SESSION['patient_Id'] = $pid;     
          $sql1 = "SELECT * FROM patient WHERE patient_Id = '$pid'";
          $run = mysqli_query($con,$sql1); 
          if($run)
          {
            while($row = mysqli_fetch_assoc($run))
            {
                $id = $row['patient_Id'];
                $pname = $row['Patient_Name'];
                
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$pname.'</td>
                <td>
                <a href="dischargepatient.php" class="text-light" ><button  class = "btn btn-warning">Discharge</button></a>
            </td>
              </tr>';
            }
          }
          else
          {
            die(mysqli_error($con));
          }
          
        }
        
        /*$num = mysqli_num_rows($run);
        if($num)
        {
          if($run)
          {
          
          } 
        }
        else
        {
        $invalid=1;
        }*/

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