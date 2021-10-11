<?php
    if(isset($_POST['submit'])))
    {
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        //to
        $recipient = "add send email address";

        //body
        $email_content = $subject."\n\nYou have recived an email from ".$name."("$email.").\n\n";
        $message;

        //from
        $email_header = "From: add email";
        if(mail($recipient,$subject, $email_content, $email_header)){
            header("Location: ../index.php?mailsend=succeeded");
        }
        else
        {
            header("Location: ../index.php?mailsend=failed");
        }
    }
?>