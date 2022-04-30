<?php
    require_once "./dbh.inc.php";
    require_once "./validations.inc.php";

    if(isset($_POST["login-Btn"])){
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $remember = $_POST["re-check"];

        if(inputsEmptyLogin($email,$pass,$remember)){
            header("Location: ../index.php?err=empty_inputs");
        }elseif(emailInvalid($email)){
            header("Location: ../index.php?err=invalid_email");
        }elseif(PasswordInvalid($pass)){
            header("Location: ../index.php?err=invalid_password");
        }else{
            loginUser($conn,$email,$pass,$remember);
        }

    }else{
        header("Location: ../index.php");
        exit();
    }
    
    function loginUser($conn,$email,$pass,$remember){

        $sql = "SELECT* FROM user WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("location:../index.php?err=failed_stmt");
        }
        else{
            mysqli_stmt_bind_param($stmt, "s",$email);
            mysqli_stmt_execute($stmt);
            $data = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($data)){
                $passHashed = $row["password"];
                $isPasswordOk = password_verify($pass,$passHashed);
                if($isPasswordOk){
                    session_start();
                    $_SESSION["user_email"] = $row["email"];
                    $_SESSION["user_fname"] = $row["fname"];
                    $_SESSION["user_lname"] = $row["lname"];
                    $_SESSION["user_mobile"] = $row["phone"];

                    if(isset($remember)){
                        setcookie("emailcookie",$email,time()+(3600*24*7),"/");//7days
                        setcookie("passwordcookie",$pass,time()+(3600*24*7),"/");
                    }else{

                        if(isset($_COOKIE["emailcookie"])){
                            setcookie("emailcookie","",time() - (3600*24*7),"/");
                        }

                        if(isset($_COOKIE["passwordcookie"])){
                            setcookie("passwordcookie","",time() - (3600*24*7),"/");
                        }
                    }

                    header("Location: ../profile.php");
                }
                else{
                    header("location: ../index.php?err=login_failed_pass");
                    exit();
                }
            }else{
                header("location: ../index.php?err=login_failed_email");
                exit();
            }
        }
        mysqli_stmt_close($stmt);
    }
?>