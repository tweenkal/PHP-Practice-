<?php

    if($_POST['Filename'])
    {
        $Filename = "File/" . $_POST['Filename'];
        $content = $_POST['content'];
        $file = fopen($Filename,"w") or die("unable create file");
        fwrite($file, $content);
        fclose($file);
        echo "file is created"; 
    }
?>


<form method="post" action="">
    <input type="text" name="Filename" placeholder="Enter file name" />
    <br>
    <br>
    <textarea name="content">

    </textarea>
    <br>
    <br>
    <button>Create file</button>
</form>