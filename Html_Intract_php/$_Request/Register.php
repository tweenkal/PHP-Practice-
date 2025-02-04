<!-- 
👉$_Request :-

👉If you are looking for data that is created by a get and post 
request, then you can get it with the help of a request and only 
data can be gotten inside a get request. Only data can be posted 
inside a post request. Data can be both gotten and posted inside 
a boot request.-->


<?php

    if($_REQUEST)
    {
        foreach($_REQUEST as $key => $data)
        {
            echo $key ."=>" .$data;
            echo "<br>";
        }
    }
?>

