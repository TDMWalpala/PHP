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
    <p class="msg">Successfully Registered</p>
    <div class="forms">
        <form action="" class="login">
            <h2>Login</h2>
            <input type="text" name="email"placeholder="Email">
            <input type="text" name="pass"placeholder="Password">
            <div class="rem">
                <input type="checkbox" name="re-check" id="re-check">
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
