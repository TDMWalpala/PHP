<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array with value & Reference</title>
</head>
<body>
    <?php
        
        //value type / primitive data type
         $examplearray = array("kamal","Nimak","Kasun","Sandun");

         $arr = $examplearray;

         var_dump($examplearray);
         var_dump($arr);

         $examplearray['4'] = "tharindu";
         var_dump($examplearray);
         var_dump($arr);
         
         echo "----------------------Reference-data-type----------------------------------------";
         $examplearray = array("kamal","Nimak","Kasun","Sandun");

         $arr =& $examplearray;

         var_dump($examplearray);
         var_dump($arr);

         $examplearray['4'] = "tharindu";
         var_dump($examplearray);
         var_dump($arr);

    ?>
</body>
</html>