<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <?php
        
        $x = 20;
        $y = 30;
        $z = 20;
        $w = 10;

        if($x == $y || $x == $z)
        {
            echo "x equal to y or z or Both";
            echo "<br>";
        }
        if($y==30 && $y ==($w+20))
        {
            echo "y equal to 30 and y equal to w + 20";
            echo "<br>";
        }

        if($x==$z xor $x == $w)
        {
            echo "x equal to z OR x equal to w BUT not both condition are right or wrong";
            echo "<br>";
        }
    ?>
</body>
</html>