<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing & De-Hashing</title>
</head>
<body>
    <form action="" method ="POST">
         <!--Hashing & De-Hashing-->
         <input type="text" name = "pass" placeholder ="Type your Password">
         <input type="submit" value = "Hash" name ="btnconvert">
    </form>
    <?php
       if(isset($_POST['btnconvert']))
       {
           $pass = $_POST['pass'];
           $passHashed = password_hash($pass, PASSWORD_DEFAULT);
           echo'<p>Default Password = '.$pass.'</p><br>';
           echo'<p>Hashed Password = '.$passHashed.'</p><br>' ;

           //De-Hashing
           $passDeHashed = password_verify($pass, $passHashed); 
           echo'<p>Password Match = '.$passDeHashed.'</p><br>' ;

       }
    ?>
</body>
</html>