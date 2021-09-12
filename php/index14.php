<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Fuctions</title>
</head>
<body>
    <?php
       $x = 100;
       function newCalc()
       {
          echo "Hello World<br>";
       }
       function mul($x)
       {
           $ans = $x*3;
           echo "Answer is ".$ans;
       }

       function mySelf($name, $age)
       {
           echo "<br>my name is ".$name;
           echo "<br>my age is ".$age;
       }
        $y = 50;
       function addNum($x,$y)
       {
           $ans = $x+$y;
           return $ans;
       }

       newCalc();
       mul($x);
       mySelf("tharindu", 21);
       $sum = addNum($x,$y);
       echo "<br>sum = ".$sum;

    ?>
</body>
</html>