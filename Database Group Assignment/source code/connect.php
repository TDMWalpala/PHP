<?php
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABASENAME = 'suwa_sahana';

    $con = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASENAME);

    if($con){
        //echo "connection successfully";
    }else
    {
        die(mysqli_error($con));
    }
?>