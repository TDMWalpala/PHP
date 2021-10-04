<?php
  include 'connect.php';
  session_start();
  $pcuid = $_SESSION['pcu_id'];
  if(isset($_GET['deleteno']))
  {
      $unitno = $_GET['deleteno'];
      
          $sql1 = "DELETE FROM diagnostic_unit WHERE Unit_No = '$unitno'";
          
          $result1 = mysqli_query($con,$sql1);
         
          if($result1)
          {
            $sql2 = "DELETE FROM  patient_care_unit WHERE PCU_Id = '$pcuid'";
            $result2 = mysqli_query($con,$sql2);
            if($result2)
            {
                echo "Deleted successfully";
                header ('Location:displaydiaunit.php');
                
            }

          }
          else
          {
            die(mysqli_error($con));
          }
  }
?>