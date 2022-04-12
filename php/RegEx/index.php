<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression-1</title>
</head>
<body>
    <?php
    $string = "My name is Tharindu, Tharindu is my name";
    if(preg_match("/Tharindu/",$string)){
        echo "It is a match";
        echo '<br>';
    }else{
        echo "Not a match";
        echo '<br>';
    }
    if(preg_match("/Tharindu/",$string,$arr)){
        print_r($arr);
        echo '<br>';
    }

    if(preg_match_all("/Tharindu/",$string,$arr)){
        print_r($arr);
        echo '<br>';
    }
    if(preg_match_all("/Tha(ri)ndu/",$string,$arr)){
        print_r($arr);
        echo '<br>';
    }
    $stringReplace = preg_replace("/Tharindu/","Kamal",$string);
    echo $stringReplace;
    ?>
</body>
</html>