<!-- 👉Here $_File is the super global variable
    👉When you want to make any changes to a file, such as 
    editing, deleting, or adding files, you can do so with the 
    help of $_file. -->


<?php

    // print_r($_FILES);

    if($_FILES['fileUpload'])
    {
        $path = $_FILES['fileUpload']['name'];
        echo $path;

        $upload_path = "./Upload/" . $path;
        echo $upload_path;

        if(move_uploaded_file($_FILES['fileUpload']['tmp_name'] , $upload_path) || die("Failed to upload"))
        {
            echo "File is uploaded";
        }
        else
        {
            echo "File is not uplaoded";
        }
    }
    else{
        echo "no file found";
    }
        
        // In php function move_uploaded_file() this function is upload 
        // file for this folder.

        
?>