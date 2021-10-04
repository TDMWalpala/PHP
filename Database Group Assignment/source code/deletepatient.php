<?php
  include 'connect.php';
  if(isset($_GET['deleteid']))
  {
    $pid = $_GET['deleteid'];

    $sql1 = "DELETE FROM patient WHERE patient_Id = $pid";
    $result1 = mysqli_query($con,$sql1);
    $sql2 = "DELETE FROM in_patient WHERE patient_Id = $pid";
    $result2 = mysqli_query($con,$sql2);
    $sql3 = "DELETE FROM out_patient WHERE patient_Id = $pid";
    $result3 = mysqli_query($con,$sql3);
    $sql4 = "DELETE FROM emegency_contact WHERE patient_Id = $pid";
    $result4 = mysqli_query($con,$sql4);
    $sql5 = "DELETE FROM insuarance_company WHERE patient_Id = $pid";
    $result5 = mysqli_query($con,$sql5);
      
    if($result1)
      {
          echo "Deleted successfully";
          header ('Location:displaypatient.php');
      }
      else
      {
        die(mysqli_error($con));
      }
  }
?>