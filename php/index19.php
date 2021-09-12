<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE_Supperloble</title>
</head>
<body>
    <?php
    $myn = "myname";
       setcookie($myn, "Tharindu Darshana", time()+(86400*30));

       if(!isset($_COOKIE[$myn]))
       {
           echo "Cookie name ".$myn." is not set";
       }
       else
       {
           echo "cookie ".$myn." is set<br>";
           echo "Value is ".$_COOKIE[$myn];
       }
    ?>
</body>
</html>