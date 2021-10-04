<?php
  include 'connect.php';
  if(isset($_GET['deleteid']))
  {
      $no = $_GET['deleteid'];

      $sql1 = "DELETE FROM test WHERE Treatment_No = $no";
      $result1 = mysqli_query($con,$sql1);
      $sql2 = "DELETE FROM treatment WHERE Treatment_No = $no";
      $result2 = mysqli_query($con,$sql2);
      if($result1&&$result2)
      {
          echo "Deleted successfully";
          header ('Location:displaytest.php');
      }
      else
      {
        die(mysqli_error($con));
      }
  }
?>