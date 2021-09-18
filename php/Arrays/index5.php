<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arra In-Depth 5</title>
</head>
<body>
    <?php
         //Multi dimentional array
        // very helpful when we are dealing with database

        $arr1 = array(array(1,2,3,4,5), "kasun", "Nimal", 34, 56);
        print_r($arr1); //Array ( [0] => Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 ) [1] => kasun [2] => Nimal [3] => 34 [4] => 56 )
        echo"<br>-----------------------------------------------------------------------------------------------<br><br>";

        $arr2 = array("kama",array("charith", "Dineth", array(1,2,3,4,5), "pasindu"), 2020);
        print_r($arr2);
        
        //Array ( [0] => kama [1] => Array ( [0] => charith [1] => Dineth [2] => Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 ) [3] => pasindu ) [2] => 2020 )
        echo"<br>-----------------------------------------------------------------------------------------------<br><br>";
        
        print_r($arr2[1]); // Array ( [0] => charith [1] => Dineth [2] => Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 ) [3] => pasindu )

        echo"<br>-----------------------------------------------------------------------------------------------<br><br>";

        print_r($arr2[1][2]); //Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 )

    ?>
</body>
</html>