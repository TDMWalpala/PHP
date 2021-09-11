<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>
<body>
    <?php
         $x = 10;
         $y = "10";

        if($x==$y)
        {
            echo "True";
        }
        else               // True
        {
            echo "False"; 
        }

        echo "<br>";

        if($x===$y) // check value & data type
        {
            echo "True";
        }
        else             // False
        {
            echo "False"; 
        }
        
        echo "<br>";

        if($x!=$y)
        {
            echo "True";
        }
        else             // False
        {
            echo "False"; 
        }

        echo "<br>";
        
        if($x!==$y)
        {
            echo "True";
        }
        else             // False
        {
            echo "False"; // check value & data type
        }

        /*<,>,<=,>=, <> = !=,*/

    ?>
</body>
</html>