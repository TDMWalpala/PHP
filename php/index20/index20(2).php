<!-- SESSION_Supperloble-->
<?php
   session_start();

   echo "My height is ".$_SESSION['height']."<br>";
   echo "My name is ".$_SESSION['name']."<br>";

   session_unset(); // remove session variables

   //session_destroy(); // session distroy
?>   