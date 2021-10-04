<?php

  include 'connect.php';
  if(isset($_GET['deleteid']))
  {
    $pid = $_GET['deleteid'];

    $sql4 = "DELETE FROM insuarance_company WHERE patient_Id = '$pid'";
    $result4 = mysqli_query($con,$sql4);
      
    if($result4)
      {
          echo "Deleted successfully";
          header ('Location:displayinsurance.php');
      }
      else
      {
        die(mysqli_error($con));
      }
  }
?>