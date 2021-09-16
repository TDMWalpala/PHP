<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert hardcode</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <?php
         // just insert hardcode values into database 

         $sql = " INSERT INTO user(Name,PWD) VALUES('Jagath','895')";

         if(mysqli_query($conn,$sql))
         {
             echo "Sucessfully Inserted";
         }
    ?>
</body>
</html>