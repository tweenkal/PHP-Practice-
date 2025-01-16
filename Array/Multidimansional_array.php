<!-- Multidimansional array :-A multidimensional array is an 
                             array containing one or more arrays.
                             PHP supports multidimensional arrays 
                             that are two, three, four, five, or
                              more levels deep. However, arrays
                               more than three levels deep are
                                hard to manage for most people. -->


<?php

    $users = [
        [1,"Twinkal","Ahemdabad"],
        [2,"Jaymisa","Ahemdabad"],
        [3,"Jurali","Surat"],
        [4,"Jay","Ahemdabad"]
    ];


    for($i=0 ; $i < count($users) ; $i++)
    
        for($j=0 ; $j < count($users[$i]) ; $j++)
        {
            echo $users[$i][$j];
            echo "<br>";
        }
    
    // echo "<pre>";       
    // print_r($users);        //Here print_r is the print of the array.
    // echo "</pre>";
    

?>