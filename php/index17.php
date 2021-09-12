<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET_Supperloble</title>
</head>
<body>
    <form action="" method = "GET">
        <input type="text" name = "name"><br>
        <button type ="submit">submit</button>
    </form>
    <?php
        if(isset($_GET['name']))
        {
            $name = $_GET['name'];
            echo "Your name is ".$name;
        }
       
    ?>
</body>
</html>