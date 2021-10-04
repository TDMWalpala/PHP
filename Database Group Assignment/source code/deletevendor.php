<?php
  include 'connect.php';
  if(isset($_GET['deleteno']))
  {
      $regno = $_GET['deleteno'];

      $sql = "DELETE FROM vendor WHERE Reg_No = $regno";

      $result = mysqli_query($con,$sql);
      if($result)
      {
          echo "Deleted successfully";
          header ('Location:displayvendor.php');
      }
      else
      {
        die(mysqli_error($con));
      }
  }
?>