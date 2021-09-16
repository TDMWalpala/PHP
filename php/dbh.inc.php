<?php
// DB conection
   $dbserver = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $database = "sample1";

   //My SQLi conection useing above parameters
   $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $database);

   if($conn)
   {
       echo "Success!";
   }
?>