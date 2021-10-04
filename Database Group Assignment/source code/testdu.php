
<?php
   include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Details</title>
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
    <form action="testdu.php" method = "POST">

  <div class="mb-3">
    <label for="name" class="form-label">Test Code</label>
    <input type="number" class="form-control" placeholder = "Enter Test Code" name = "code">
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
      <th scope="col">Treatment_No</th>
      <th scope="col">Name</th>
      <th scope="col">Test_Code</th>
      <th scope="col">Cost</th>
    </tr>
  </thead>
  <tbody>
    <?php
     if(isset($_POST['submit']))
     {
       $code = $_POST['code'];
       $sql1 = "SELECT * FROM test WHERE Test_Code = '$code'";
       $run1 = mysqli_query($con,$sql1);

       $sql2 = "SELECT Treatment_No FROM test WHERE Test_Code = '$code'";
       $run2 = mysqli_query($con,$sql2);

       if($run1)
       {
        while($row = mysqli_fetch_assoc($run1))
        {
            $code = $row['Test_Code'];
            $cost = $row['Cost'];
        }
            
        if($run2){
            while($row = mysqli_fetch_assoc($run2)){
                $no = $row['Treatment_No'];                
            }
        }
        
        $sql3 = "SELECT TName FROM treatment WHERE Treatment_No = '$no'";
        $run3 = mysqli_query($con,$sql3);
        if($run3){
            while($row = mysqli_fetch_assoc($run3)){
                $name = $row['TName'];                
            }
            
        echo '<tr>
        <th scope="row">'.$no.'</th>
        <td>'.$name.'</td>
        <td>'.$code.'</td>
        <td>'.$cost.'</td>
        <td>
        <a href="updatetest.php? updateid='.$no.'" class="text-light" ><button  class = "btn btn-primary">Update</button></a>
        <a href="deletetest.php? deleteid='.$no.'" class = "text-light"><button class = "btn btn-danger">Delete</button></a>
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