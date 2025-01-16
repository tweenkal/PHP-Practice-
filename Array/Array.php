<!-- Array :- Array is a collection of data.store mulitple value
              in a single variable.
              
              👉Types of array:
              1)Indexing array
              2)Multidimesional array
              3)Associative array-->


<!-- 1.Index array -->


<?php

    $users = ["Twinkal","Jaymisa","Jay","Jurali","Jasmin"];
    // echo $users[1];

    for($user=0 ; $user < count($users) ; $user++)
    {
        echo "<h2 style='color : blue'>".$users[$user]."</h2>";
    }
?>



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

        
