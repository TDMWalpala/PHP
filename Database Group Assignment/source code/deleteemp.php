<?php
  include 'connect.php';
  if(isset($_GET['deleteid']))
  {
      $empid = $_GET['deleteid'];

      $sql1 = "DELETE FROM employee WHERE Employee_No = $empid";
      $result1 = mysqli_query($con,$sql1);
      $sql2 = "DELETE FROM attendent WHERE Employee_No = $empid";
      $result2 = mysqli_query($con,$sql2);
      $sql3 = "DELETE FROM cleaner WHERE Employee_No = $empid";
      $result3 = mysqli_query($con,$sql3);
      $sql4 = "DELETE FROM doctor WHERE Employee_No = $empid";
      $result4 = mysqli_query($con,$sql4);
      $sql5 = "DELETE FROM employee_assign WHERE Employee_No = $empid";
      $result5 = mysqli_query($con,$sql5);
      $sql6 = "DELETE FROM medical_staff WHERE Employee_No = $empid";
      $result6 = mysqli_query($con,$sql6);
      $sql7 = "DELETE FROM non_medical_staff WHERE Employee_No = $empid";
      $result7 = mysqli_query($con,$sql7);
      $sql8 = "DELETE FROM nurse WHERE Employee_No = $empid";
      $result8 = mysqli_query($con,$sql8);
      $sql9 = "DELETE FROM patient_care_unit WHERE Employee_No = $empid";
      $result9 = mysqli_query($con,$sql9);
      $sql10 = "DELETE FROM user WHERE Employee_No = $empid";
      $result10 = mysqli_query($con,$sql10);

      if($result1)
      {
          echo "Deleted successfully";
          header ('Location:displayemp.php');
      }
      else
      {
        die(mysqli_error($con));
      }
  }
?>