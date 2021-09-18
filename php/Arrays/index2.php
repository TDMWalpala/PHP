<?php
    include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array In-Depth 2</title>
</head>
<body>
    <?php
       // inser db data into the array
       $sql = "SELECT * FROM user";
       $result = mysqli_query($conn, $sql); //table data return
       $arr = array(); //create array
       if(mysqli_num_rows($result)>0) //number if rows
       {
          while($row = mysqli_fetch_assoc($result))
          {
              $arr[] = $row; //insert rows into the array
          }
          print_r($arr);
       }
       echo"<br>-----------------------------------------------------------------------------------------------<br><br>";

       foreach($arr[1] as $d) // print only one row
       {
           echo $d;
       }
       echo"<br>-----------------------------------------------------------------------------------------------<br><br>";

       foreach($arr as $d)
       {
           echo $d['Name']." ";
       }
    ?>
</body>
</html>