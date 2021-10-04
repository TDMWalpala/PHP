<?php
  include 'connect.php';
  if(isset($_GET['deleteid']))
  {
      $bedno = $_GET['deleteid'];

      $sql = "DELETE FROM bed WHERE Bed_No = $bedno";

      $result = mysqli_query($con,$sql);
      if($result)
      {
          echo "Deleted successfully";
          header ('Location:displaybed.php');
      }
      else
      {
        die(mysqli_error($con));
      }
  }
?>