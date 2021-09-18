<?php
     $dbserver = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $dbname = "sample1";

     //mysql conection
     $conn = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);

     if(!$conn)
     {
          die("conection Faild".mysqli_connect_error()); //exit and print error message
     }
?>