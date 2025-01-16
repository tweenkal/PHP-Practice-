<!-- foreach :- display array element for using foreach loop.
                It is easy to use .
                In a for loop, you have to count the number of items, 
                while in a foreach loop, you don't have to count the 
                number of items, it is counted by default. -->

<?php

    $users = ["Twinkal","Jaymisa","Jay","Jurali","Jasmin"];

    foreach($users as $x)
    {
        echo $x;
        echo "<br>";


        // if($x == "Jay")
        // {
        //     break;
        // }
        
    }


    // Second syntax:

    foreach($users as $x):
        echo $x;
        echo "<br>";

    endforeach
?>