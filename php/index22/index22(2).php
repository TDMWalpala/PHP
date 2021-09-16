<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get user input and insert</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <!-- to get user input-->
    <form action="#" method = "POST">
        <input type="text" name="uname" placeholder = "username"><br>
        <input type="text" name="upass" placeholder = "password"><br>
        <input type="submit" name="btnsubmit" value = "submit">

    </form>
    <?php
        if(isset($_POST['btnsubmit']))
        {
            $uname = $_POST['uname'];
            $upass = $_POST['upass'];

            $sql = "INSERT INTO user(Name,PWD) VALUES('$uname','$upass')";

            if(mysqli_query($conn, $sql))
            {
                echo "Sucessfully Inserted";
            }
        } 
    ?>
</body>
</html>