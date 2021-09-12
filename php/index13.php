<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOPs</title>
</head>
<body>
    <?php
        echo "-----WHILE-----<br>";
         $x=0;
         while($x<=6){
             echo $x;
             echo "<br>";
             $x++;
         }
        
        echo "-----DO-WHILE-----<br>";
         $y =0;
      
         do{
            echo $y;
            echo "<br>";
            $y++;
         }while($y<=6);

         echo "------FOR--------<br>";

        for($z = 0; $z <= 6; $z++){
            echo $z;
            echo "<br>";
        }

        echo "------FOR-EACH-------<br>";

        $arr = array("Kamal", "Nimal","Sunil","Pasan","Hasan");

        foreach($arr as $x)
        {
            echo "My name is ".$x;
            echo "<br>";
        }
    ?>
</body>
</html>