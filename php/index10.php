<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <form action="" method = "GET">
        <input type="text" name = "num1" placeholder = "Number 1"><br><br>
        <input type="text" name = "num2" placeholder = "Number 2"><br><br> 

        <select name="operator">
            <option value="none">None</option>
            <option value="add">Add</option>
            <option value="sub">Sub</option>
        </select>

        <button type="submit" name ="submit">calculate</button>
    </form>
    <?php
        if(isset($_GET['submit']))
        {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['operator'];

            // dispaly 

            switch($operator)
            {
                case "add":
                    echo "Answer is : ".($num1+$num2);
                    break;
                case "sub":
                    echo "Answer is : ".($num1-$num2);
                    break;
                default :
                    echo "Please check the operator";        
            }
        }
    ?>
</body>
</html>