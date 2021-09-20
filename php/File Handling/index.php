<?php
    //-----create a file-----
    //touch('sample.txt');

    //-----delete a file----
    //unlink('sample.txt');

    //-----create folder-----
    //mkdir('sampledir');

    //-----delete a folder----
    //rmdir('sampledir');

    //---create a file and write some data---
    $file = fopen("file.txt","a");
    fwrite($file,"Tharindu");
    fwrite($file,"\nHello world");
    fclose($file);

    //read the file
    $file = fopen("file.txt","r");
      while(!feof($file))
      {
          echo fgets($file).'<br>';
      }
      fclose($file);

    //get file size
    echo filesize('file.txt').'<br>';
    
    //check whether file is avaliable or not
    if(file_exists('file.txt'))
    {
        echo "file is avaliable".'<br>';
    }
    else
    {
        echo "file is not avaliabe".'<br>';
    }

    //create a file right mode
    $file= fopen('text.txt','w');
    fputs($file,2020);
    fclose($file);

    $arr = file('text.txt');
    print_r($arr);
    $co = $arr[0];
    $co++;

    $file= fopen('text.txt','w');
    fputs($file,$co);
    fclose($file);
?>