<!-- Remove and Add elements in array -->

<!-- Add elements -> array_push
     Remove elements -> array_pop
     Multiple array elemenets remove -> array_splice -->

    
<?php

    $users = ["Twinkal","Jurali","Heni","Jay","Jasmin"];

    // Add elements

    array_push($users,"Jiyan","Jeli");

    // Remove elements

    array_pop($users);

    // Multiple elements remove

    array_splice($users,-1);

    print_r($users);
?>