<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST_Supperloble</title>
</head>
<body>
    <form action="" method = "POST">
        <input type="text" name = "name"><br>
        <button type ="submit">submit</button>
    </form>
    <?php
        if(isset($_POST['name']))
        {
            $name = $_POST['name'];
            echo "Your name is ".$name;
        }
       
    ?>
</body>
</html>