<!--👉loops will run the same code again and again.
    👉so when we want to run same code multiple times then we use 
    loops .
    
    👉 In php four types of loop
    1)for 2)while 3)do_while 4)foreach-->



<!-- 👉Print the 1 to 10 number using for loop -->

<?php

    for($i=1 ; $i<=10 ; $i++ )
    {
        echo "number is =",$i , "<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
?>


<!-- 👉Print the multiplication table using for loop -->

<?php

    $num = 2;

    echo "Multiplicatio table for 2<br><br><br>";

    for($i=1 ; $i<=10 ; $i++)
    {
        echo $num ,"*", $i , "=" , $num * $i , "<br>"; 
    }
?>