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
    <form action="signup2.inc.php" method="POST">
        <?php
            //if url has email
            if(isset($_GET['email']))
            {
               $email = $_GET['email'];
               echo '<input type="text" name="uEmail" placeholder = "Enter Email" value ="'.$email.'"><br>';
            }
            else
            {
               echo '<input type="text" name="uEmail" placeholder = "Enter Email"><br>';
            }
            //password
            if(isset($_GET['pass']))
            {
                $pass = $_GET['pass'];
                echo '<input type="text" name="uPass" placeholder = "Enter Password" value="'.$pass.'"><br>';
            }
            else
            {
                echo '<input type="text" name="uPass" placeholder = "Enter Password"><br>';
            }
        ?>   
        <input type="submit" name="btnsignup" value = "SignUp">  
    </form>
    
    <?php
        //display erro messages acordding to this code
        //first we have identify the header fuction url

        //Method 2 - useing get method
        //'singup' some kind of data
        //then we can use GET method
        if(!isset($_GET['signup']))//if don't have 'signup' inside the url 
        {
            exit();
        }
        else
        {
            // this variable equal to whatever comes afther 'signup'
            $signupcheck = $_GET['signup'];

            if($signupcheck == 'empty')
            {
                echo"<p class = 'error'>You did not fill in all fields!</P>";
            }
            elseif($signupcheck == 'invalidemail')
            {
                echo"<p class = 'error'>You have use invalid email address!</P>";
            }
            elseif($signupcheck == 'sucessfully')
            {
                echo"<p class = 'success'>You signup successfully!</P>";
            }
        }
        
    ?>
</body>
</html>