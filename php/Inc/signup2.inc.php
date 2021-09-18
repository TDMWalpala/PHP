<?php
   //Erro handling in php
   if(isset($_POST['btnsignup'])){
       include 'dbh.inc.php';
       $uemail = mysqli_real_escape_string($conn, $_POST['uEmail']);
       $upass =  mysqli_real_escape_string($conn, $_POST['uPass']);

       if(empty($uemail) || empty($upass)){
           header("Location: index3.php?signup=empty&email=$uemail&pass=$upass");
       }
       else
       {
           //validate email using inbulid email validator
           if(!filter_var($uemail, FILTER_VALIDATE_EMAIL))
           {
            header("Location: index3.php?signup=invalidemail&email=$uemail&pass=$upass");
           }
           else{
               $sql = "INSERT INTO user(Name,PWD) VALUES('$uemail','$upass')";
               //try catch block- exception handling
               try{
                   if(!mysqli_query($conn,$sql))
                   {
                       throw new Exception('can not run the quary inside the database');
                       //this line will never executed
                       echo"\nAfter throw";
                   }
                   else{
                    header("Location: index3.php?signupsuccessfully");
                   }
               }
               //catch block will executed only when exception has been thrown by try block
               catch(Exception $e)
               {
                   echo "\nException Caught :".$e->getMessage();
               }
               finally
               {
                   echo"\n no matter what is block will always executed";
               }
           }
       } 
   }
?>