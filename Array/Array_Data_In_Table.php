<!-- Display array data in table -->

<?php

    $users = [
        [1,"Twinkal","Ahemdabad","Twinkal@gmail.com"],
        [2,"Jurali","Surat","Jurali@gmail.com"],
        [3,"Heni","UK","Heni@gmail.com"]
    ];


    echo "<table border = 1>";

    for($i=0 ; $i<count($users) ; $i++)
    {
        echo "<tr>";

        for($j=0 ; $j<count($users[$i]) ; $j++ )
        {
            echo "<td>";

            echo $users[$i][$j];

            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
?>