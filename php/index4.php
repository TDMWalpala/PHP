<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefined Fuctions</title>
</head>
<body>
    <?php
         //strlen()
         $name = "Tharindu Darshana walpala";
         $result = strlen($name);
         echo $name;
         echo "<br>";
         echo $result;
         echo "<br>";
         //str_word_count()
         $count = str_word_count($name);
         echo $count;
         echo "<br>";
         //strrev()
         $revers = strrev($name);
         echo $revers;
         echo "<br>";
         //strpos()
         $position = strpos($name,"walpala");
         echo $position;
         echo "<br>";
         //str_replace();
         $replace = str_replace("Darshana","Lakshan",$name);
         echo $replace;

    ?>
</body>
</html>