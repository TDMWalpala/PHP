<?php
     if(isset($_POST['submit'])){
        //  echo 'Submit';
        // $file = $_FILES['file'];//get file information's
        // print_r($file);
        $fileName  = $_FILES['file']['name'];
        $fileTempName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];
        // echo $fileName.'<br>';
        // echo $fileTempName.'<br>';
        // echo $fileSize.'<br>';
        // echo $fileError.'<br>';
        // echo $fileType.'<br>';

        $fileExt = explode('.',$fileName);
        // print_r($fileExt);
        $fileActualExt = strtolower($fileExt['1']);
        // echo $fileActualExt;
        $allowed = array('jpg','jpeg','png');
        if(in_array($fileActualExt,$allowed)){
            if($fileError===0){
                if($fileSize<= 1000000){//byte
                    $fileNewName = uniqid('',true).'.'.$fileActualExt;
                    $fileDestination = 'Local/'.$fileNewName;
                    move_uploaded_file($fileTempName,$fileDestination);
                    header('location: index.php?upload=success');

                }else{
                    echo'File is too big!.';
                }

            }else{
                echo'There is an error related your file.';
                }

        }else{
            echo'You can not upload this type of files';
        }

     }
?>