<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <form class ="contact-form" action="include/mailer.inc.php" method="POST">
        <p>Contact from</p>
        <input type="text" name="fullname"placeholder="Full Name">
        <input type="email" name="email"placeholder="Email">
        <input type="text" name="subject"placeholder="Subject">
         <textarea name="message" placeholder="Include" cols="30" rows="10"></textarea>
         <button type="submit" name="submit">Send</button>
       </form>
       <div>
           <?php if(isset($_GET["mailsend"])))
           {
            if($_GET["mailsend"] === "succeeded"){
                echo "<p style='text-align: center; background-color: #2bca1d; margin-top: 5px;'>Succesfully Send!</p>";
            }
            else if($_GET["mailsend"] === "failed"){
                echo "<p style='text-align: center; background-color: #f53d3d; margin-top: 5px;'>Failed to Send!</p>";
            }
           }
           ?>
    </div>
</body>
</html>
<?php

?>