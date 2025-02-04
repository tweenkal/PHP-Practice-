<?php

    if(isset($_FILES['file']))
    {
            $file = $_FILES['file']['tmp_name'];
            $myfile = fopen($file,"r");
            echo fread($myfile,filesize($file));
            fclose($myfile);
    }
?>

<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file" />
    <br>
    <br>
    <button>Read file</button>
</form>