<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swich Case</title>
</head>
<body>
    <?php
       $input = 2;

       switch($input)
       {
           case 1:
            echo "1";
            break;
           case 2:
            echo "2";
            break;
           default:
             echo "Other";    
       }
    ?>
</body>
</html>