 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Array In-Depth 1</title>
 </head>
 <body>
     <?php 
         //insert data into array
         //method 1
         $arr = array();
         $arr[] = "kasun";
         $arr[] = 100;
         echo $arr['0'].'<br>';
         echo $arr['1'].'<br>';
         print_r($arr);
         echo"<br>---------------------------<br>";
         //method 2
         $arr2 = array();
         array_push($arr2, "tharindu",200,"chamara");
         print_r($arr2);
         echo"<br>---------------------------<br>";
         //method 3
         $arr3 = array();
         array_push($arr3, "darshana");
         array_push($arr3, "230");
         print_r($arr3);    
          ?>
 </body>
 </html>