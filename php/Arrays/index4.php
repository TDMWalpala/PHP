<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array In-Depth 4</title>
</head>
<body>
    <?php
        //Associative arrays
        // every data element has a key
        // good for naming thing
        // there are two ways to declare/defined an associative array

        //way 1
        $arr = array("name" => "kasun perera", "maths" => 88, "science" => 67);

        echo $arr['name'];
        echo"<br>-----------------------------------------------------------------------------------------------<br><br>";

        $arr2  = array();
        $arr2['email'] = "name@gmail.com";
        $arr2['usrname'] = "name123";
        $arr2['password'] = "sdfhi7r3347";

        echo $arr2['email'];

        echo "<br>";
        print_r($arr2);
    ?>
</body>
</html>