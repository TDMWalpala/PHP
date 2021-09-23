<?php
    $con = new mysqli('localhost','root','','crudoperations');

    /*if($con)
    {
        echo "Connection is successfull";
    }
    else
    {
        die(mysqli_error($con));
    }*/
    if(!$con)
    {
        die(mysqli_error($con));
    }
?>