<?php
    if(isset($_GET['newname'])){
        $path = "Local/".$_GET['newname']."";
        if(unlink($path)){
            header('Location: index.php?delete=success');
            exit();
        }
        else{
            echo "Failed to delete";
            exit();
        }
    }
?>