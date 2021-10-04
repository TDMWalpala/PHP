<?php
session_start();
$contact=$_SESSION['Contact_No'];
  include 'connect.php';
  if(isset($_GET['deleteid']))
  {
    $pid = $_GET['deleteid'];

    $sql4 = "DELETE FROM emegency_contact WHERE patient_Id = '$pid' and Contact_No='$contact'";
    $result4 = mysqli_query($con,$sql4);
      
    if($result4)
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