<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple file upload</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple>
        <button name="upload">Upload</button>
    </form>
    <?php
        if(isset($_POST['upload'])){
            // echo '<pre>';
            // print_r($_FILES['files']);
            // echo '</pre>';

            foreach($_FILES['files']['name'] as $index=> $name){
                // echo $index. ' ----> '. $name.'<br>';
                if(move_uploaded_file($_FILES['files']['tmp_name'][$index],'Local/'.$name)){
                    echo'Successfully uploaded '.$name.'<br>';
                }else{
                    echo'Error';
                }
            }
        }
    ?>
    <div>
        <?php
            $path = 'Local/*.*';//!filter
            $allFiles = glob($path);
            // echo '<pre>';
            // print_r($allFiles);
            // echo '</pre>';
            for($i=0; $i<count($allFiles);$i++){
                echo '<div>
                      <img src='.$allFiles[$i].'>
                      <form action = "delete.php?filename='.$allFiles[$i].'" method="POST">
                          <button type="submit" name="delete">Delete</button>
                      </form>
                </div>';
            }
        ?>
    </div>
</body>
</html>