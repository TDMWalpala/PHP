<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method</title>
</head>
<body>
    <form action=""method="GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>
    <?php
         $name = $_GET['person'];

         echo "Your name is ".$name;
    ?>
</body>
</html>