<?php
    require_once "./dbh.inc.php";
    require_once "./validations.inc.php";

    if(isset($_POST["register-Btn"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $pass = $_POST["pass"];
        $re_pass = $_POST["re-pass"];

        if(inputsEmptyRegister($fname, $lname, $email, $mobile, $pass, $re_pass)){
            header("location: ../index.php?err=empty_inputs");
        }
        else if(nameInvalid($fname, $lname)){
            header("location: ../index.php?err=invalid_name");
        }
        else if(emailInvalid($email)){
            header("location: ../index.php?err=invalid_email");
        }
        else if(mobileInvalid($mobile)){
            header("location: ../index.php?err=invalid_mobile");
        }
        else if(passwordInvalid($pass)){
            header("location: ../index.php?err=invalid_password");
        }
        else if(passNotMatch($pass, $re_pass)){
            header("location: ../index.php?err=different_pass");
        }
        else if(emailOrMobileAvailable($conn, $email, $mobile)){
            header("location: ../index.php?err=available_emailormobile");
        }
        else{
            registerNewUser($conn, $fname, $lname, $email, $mobile, $pass, $re_pass);
            // echo"success";
        }
    }
    else{
        header("location: ../index.php");
        exit();
    }
    function registerNewUser($conn, $fname, $lname, $email, $mobile, $pass, $re_pass){
        $passHashed = password_hash($pass,PASSWORD_DEFAULT);
        $sql="INSERT INTO user(fname,lname,email,phone,password) VALUES(?,?,?,?,?);";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location: ../index.php?err=failedstmt");
        }
        else{
            mysqli_stmt_bind_param($stmt, "sssis",  $fname, $lname, $email, $mobile, $passHashed);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: ../index.php?err=noerrors");
        }
    }

     
?>