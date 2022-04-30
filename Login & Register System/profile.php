<?php
    session_start();
    if(!isset($_SESSION["user_email"])){
        header("Location: ../index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - <?php if(isset($_SESSION["user_email"])){echo $_SESSION["user_fname"];} ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="profile">
        <h2>Welcome <span><?php if(isset($_SESSION["user_email"])){echo $_SESSION["user_fname"];} ?></span></h2>
        <div class="data"><?php if(isset($_SESSION["user_email"])){echo $_SESSION["user_fname"]." ".$_SESSION["user_lname"];} ?></div>
        <div class="data"><?php if(isset($_SESSION["user_email"])){echo $_SESSION["user_email"];} ?></div>
        <div class="data"><?php if(isset($_SESSION["user_email"])){echo $_SESSION["user_mobile"];} ?></div>
        <a href="./include/logout.inc.php">Logout</a>
    </div>
    
</body>
<style>
<?php include 'style.css'; ?>
</style>
</html>