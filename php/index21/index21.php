<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <?php
         // create  a query
         $sql ="SELECT * FROM user";

         // querying 

         $result = mysqli_query($conn, $sql);

         // check results

         $resultcheck = mysqli_num_rows($result);

         // if number of result >0
         if($resultcheck>0)
         {
            // print the result using while loop
            while($row = mysqli_fetch_assoc($result))
            {
                echo $row['ID']." ".$row['Name']." ".$row['PWD']."<br>";
            }
         }
    ?>
</body>
</html>