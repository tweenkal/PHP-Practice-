<!-- Associative array :- here not a indexing but all elements are 
                          attached thorugh a key -->

                    
<?php

    $usersdetails = [
        "name"=>"Twinkal",
        "surname" => "Pasnuriya",
        "age" => 21,
        "city" => "Ahemdabad",
        "state" => "Gujarat",
    ];


    // echo $usersdetails["name"];
    // echo "<br>";

    // echo $usersdetails["age"];
    // echo "<br>";

    foreach($usersdetails as $key => $data)
    {
        echo $key ." =>" .$data;
        echo "<br>";
    }


    // foreach($usersdetails as $key => $data):
    //     echo $key ." =>" .$data;
    //     echo "<br>";
    // endforeach

?>