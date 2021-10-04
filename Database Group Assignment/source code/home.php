<?php
   session_start();
   if(!isset($_SESSION['username']))
   {
       header('Location:login.php');
   }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Welcome</title>
  </head>
  <body>
    <h1>Hello <?php echo $_SESSION['username']?></h1>
    <div class="container">
        <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
    </div>
  </body>
</html>


