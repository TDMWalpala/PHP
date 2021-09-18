<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro Handlingt</title>
    <style>
        .error{
            color: red;
        }
        .success{
            color: green;
        }
    </style>
</head>
<body>
    <form action="signup.inc.php" method="POST">
        <input type="text" name="uEmail" placeholder = "Enter Email"><br>
        <input type="text" name="uPass" placeholder = "Enter Password"><br>
        <input type="submit" name="btnsignup" value = "SignUp">        
    </form>
    <?php
        //display erro messages acordding to this code
        //first we have identify the header fuction url

        //Method 1
        //store URL
        $fullurl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($fullurl, "signup=empty")==true)
        {
            echo"<p class = 'error'>You did not fill in all fields!</P>";
        }
        elseif(strpos($fullurl, "signup=invalidemail")==true)
        {
            echo"<p class = 'error'>You have use invalid email address!</P>";
        }
        else if(strpos($fullurl, "signupsuccessfully")==true)
        {
            echo"<p class = 'success'>You signup successfully!</P>";
        }
    ?>
</body>
</html>