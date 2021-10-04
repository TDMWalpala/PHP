
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
    <title>Employee Details</title>
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
    <form action="fireemp.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Employee Name</label>
    <input type="text" class="form-control" placeholder = "Enter Emloyee Name" name = "name">
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
      <th scope="col">Name</th>
      <th scope="col">Working Status</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
      <th scope="col">Employee Type</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $name = $_POST['name'];
       $sql1 = "SELECT * FROM employee WHERE Name = '$name'";
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
            $empid = $row['Employee_No'];
            $name = $row['Name'];
            $status = $row['Working_Status'];
            $contact = $row['Contact_No'];
            $address = $row['Address'];
            $type = $row['Employee_Type'];
            echo '<tr>
            <th scope="row">'.$empid.'</th>
            <td>'.$name.'</td>
            <td>'.$status.'</td>
            <td>'.$contact.'</td>
            <td>'.$address.'</td>
            <td>'.$type.'</td>
            <td>
            <a href="updateemp.php? updateid='.$empid.'" class="text-light" ><button  class = "btn btn-primary">Update</button></a>
            <a href="deleteemp.php? deleteid='.$empid.'" class = "text-light"><button class = "btn btn-danger">Delete</button></a>
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
            <strong>Error </strong> Invalid Employee Name.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          } 
    ?>
</div>
</body>
</html>