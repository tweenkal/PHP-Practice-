<!-- 👉switch :-The switch statement is used to perform different 
 actions based on different conditions.Use the switch statement to
 select one of many blocks of code to be executed. -->


<?php

    $favcolor = "black";

    switch($favcolor)
    {
        case "red":
            echo "red color";
            break;

        case "blue":
            echo "blue color";
            break;

        case "black":
            echo "black color";
            break;

        case "pink":
            echo "pink color";
            break;

        default:
        echo "color is not matched";
        break;
    }
?>