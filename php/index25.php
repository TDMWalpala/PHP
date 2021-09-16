<?php
    include 'dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select data from DB using prepared statement</title>
</head>
<body>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <!-- to get user input-->
    <form action="#" method = "POST">
        <input type="text" name="keyword" placeholder = "Enter username"><br>
        <input type="submit" name="btnfind" value = "Find">

    </form>
    <!-- stop SQL injection -->
    <?php
        if(isset($_POST['btnfind']))
        {
            $keyword = $_POST['keyword'];

            $sql = "SELECT * FROM user WHERE Name = ?";

            //create prepared statement
            $stmt = mysqli_stmt_init($conn);

            //prepare the prepared statement

            if(!mysqli_stmt_prepare($stmt,$sql))
            {
                echo "SQL statement Failed";
            }
            else
            {
                // bind parameter
                mysqli_stmt_bind_param($stmt,"s",$keyword);
                mysqli_stmt_execute($stmt);
                
                //get data

                $result = mysqli_stmt_get_result($stmt);
                
                //print data
                while($row = mysqli_fetch_assoc($result))
                {
                    echo $row['ID']." ".$row['Name']." ".$row['PWD']."<br>";
                }
                
            }

        } 
    ?>
</body>
</html>