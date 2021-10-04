
<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bed Details</title>
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
    <form action="beddu.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Bed Number</label>
    <input type="number" class="form-control" placeholder = "Enter Bed Number" name = "bedno">
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
      <th scope="col">Bed_No</th>
      <th scope="col">Ward_No</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $bedno = $_POST['bedno'];
       $sql1 = "SELECT * FROM bed WHERE Bed_No = '$bedno'";
       $run = mysqli_query($con,$sql1);

       if($run)
       {
        while($row = mysqli_fetch_assoc($run))
        {
            $bedno = $row['Bed_No'];
            $wardno = $row['Ward_No'];
            
            echo '<tr>
            <th scope="row">'.$bedno.'</th>
            <td>'.$wardno.'</td>
            <td>
            <a href="updatebed.php? updateid='.$bedno.'" class="text-light" ><button  class = "btn btn-primary">Update</button></a>
            <a href="deletebed.php? deleteid='.$bedno.'" class = "text-light"><button class = "btn btn-danger">Delete</button></a>
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