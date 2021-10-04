<?php
  include 'connect.php';
  $userid = $_GET['deleteid'];

  if(isset($_GET['deleteid']))
  {
      $userid = $_GET['deleteid'];

      $sql1 = "DELETE FROM user WHERE userid = $userid";
      $result1 = mysqli_query($con,$sql1);

      if($result1)
      {
          echo "Deleted successfully";
          header ('Location:index.php');
      }
      else
      {
        die(mysqli_error($con));
      }
  }
?>