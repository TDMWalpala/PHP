<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression-2</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="input" placeholder="Regular Expression">
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
       $regexbasics1 ="/^[a-z\s]+$/";
       if(isset($_POST['submit'])){
           if(preg_match($regexbasics1,$_POST['input'])){
               echo "<P style='color:green; font-size:1rem'>Correct</p>";
           }else{
               echo "<P style='color:red; font-size:1rem'>Incorrect</p>";
           }
       } 
    ?>
    <h3>Syntax</h3>
    <pre>
        ^  -  Start

        $  -  End

        []  -  Rules that are applied to one character

        a-z  -  Allow simple letters

        A-Z  -  Allow capital letters

        \w  -  Allow all letters with some characters

        +  -  Apply a rule to everything

        \s  -  Allow spaces

        0-9  or  \d  -  Allow Digits

        .  -  Allow all

        \.  -  Allow period

        {4}  -  Apply rule to the next 4 characters (Must be 4 characters all the time)

        {2,5}  -  Apply rule to the next 2 to 5 characters

        [A-Z][a-z][@][\d]  -  First character should be Capital, Second should be Simple, Thrid should be '@', Fourth should be a digit
    </pre>
</body>
</html>