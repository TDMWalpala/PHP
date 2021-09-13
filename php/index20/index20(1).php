<!-- SESSION_Supperloble-->
<?php
   session_start(); // session start
   
   // set session variable
   $_SESSION['height'] = 5.10;
   $_SESSION['name'] = "Tharindu";

   echo "session variable are set<br>";
?>