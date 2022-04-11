<?php
echo 'abn';
    if(isset($_POST['delete'])){
        echo 'abn';
        if(isset($_GET['filename'])){
            echo 'abn';
            $path = $_GET['filename'];
            echo $path;
            if(unlink($path)){
                header('Location:index.php?delete='.explode("/",$path)[1].'' );
                exit();
            }else{
                echo 'Failed to delete';
                exit();
            }
        }
    }
?>