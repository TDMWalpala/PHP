<?php 
    session_start();
    if(isset($_SESSION['user_email'])){
        echo("you");
        header("Location:./profile.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and register system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        if(isset($_GET['err'])){
            if($_GET['err'] === "empty_inputs"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>All the input field must be filled!</p>";
            }else if($_GET['err'] === "invalid_name"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Invalid name!</p>";
            }else if($_GET['err'] === "invalid_email"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Invalid email!</p>";
            }else if($_GET['err'] === "invalid_mobile"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Invalid mobile number!</p>";
            }else if($_GET['err'] === "invalid_pass"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Invalid password!</p>";
            }else if($_GET['err'] === "different_pass"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Both password must be matched!</p>";
            }else if($_GET['err'] === "available_emailormobile"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Email or Mobile number already used!</p>";
            }else if($_GET['err'] === "failedstmt"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Failed to execute the query!</p>";
            }else if($_GET['err'] === "noerrors"){
                echo"<p class = 'msg' style =  'background-color:#25aa25;';>Successfully Registered!</p>";
            }else if($_GET['err'] === "logingailedemail"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Incorrect email address</p>";
            }else if($_GET['err'] === "logingailedpass"){
                echo"<p class = 'msg' style =  'background-color:#ee2222;';>Incorrect password</p>";
            }

            
        }
    ?>
    <div class="forms">
        <form action="./include/login.inc.php" method="post" class="login">
            <h2>Login</h2>
            <input type="text" name="email" placeholder="Email" value="<?php if(isset($_COOKIE["emailcookie"])){ echo $_COOKIE["emailcookie"];} ?>">
            <input type="password" name="pass" placeholder="Password" value="<?php if(isset($_COOKIE["passwordcookie"])){ echo $_COOKIE["passwordcookie"];} ?>">
            <div class="rem">
                <input type="checkbox" name="re-check" id="re-check" <?php if(isset($_COOKIE["emailcookie"])){ ?> checked <?php }?>>
                <label for="re-check">Remember Me</label>
                <button type="submit" name="login-Btn">Login</button>
            </div>
        </form>

        <form action="./include/register.inc.php" method="post" class="register">
            <h2>Register</h2>
            <input type="text" name="fname"placeholder="First Name">
            <input type="text" name="lname"placeholder="Last Name">
            <input type="text" name="email"placeholder="Email">
            <input type="text" name="mobile"placeholder="Mobile">
            <input type="password" name="pass"placeholder="Password">
            <input type="password" name="re-pass"placeholder="Password">
            <button type="submit" name="register-Btn">Register</button>
        </form>
    </div>
</body>
 
</html>
