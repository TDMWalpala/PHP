<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
       $examplearray = array("kamal","Nimak","Kasun","Sandun",25,'A',34.56);
       echo $examplearray['2'];
       echo "<br>";
       echo $examplearray['3'];
       echo "<br>";
       echo $examplearray['4'];
       echo "<br>";
       echo $examplearray['5'];
       echo "<br>";
       echo $examplearray['6'];
       echo "<br>";
       echo sizeof($examplearray); // array size
       echo "<br>";
       print_r($examplearray); // print whole array
       var_dump($examplearray); // print wole array with more detaile
    ?>
    
</body>
</html>