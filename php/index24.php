<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avoiding SQL Injections Method 2</title>
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
    <!-- stop SQL injection -->
    <?php
        if(isset($_POST['btnsubmit']))
        {
            $uname = $_POST['uname'];
            $upass = $_POST['upass'];

            $sql = "INSERT INTO user(Name,PWD) VALUES(?,?)";

            //create prepared statement
            $stmt = mysqli_stmt_init($conn);

            //prepare the prepared statement

            if(!mysqli_stmt_prepare($stmt,$sql))
            {
                echo "SQL statement Failed";
            }
            else
            {
                //bind parameters to the placeholders
                mysqli_stmt_bind_param($stmt,"ss", $uname, $upass); // num of s = num of ? 
                
                // run parameters inside the database
                mysqli_stmt_execute($stmt);

                echo "Sucessfully Inserted";
            }

        } 
    ?>
</body>
</html>