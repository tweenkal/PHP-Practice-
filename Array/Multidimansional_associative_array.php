<!-- 👉Multidimansional associative array -->

<?php
    $users = [
        ["name"=>"Twinkal",
        "city"=>"Ahemdabad",
        "Email"=>"Twinkal@gmail.com"],

        ["name"=>"Jurali",
        "City"=>"Surat",
        "Email"=>"Jurali@gmail.com"],

        ["name"=>"Heni",
        "City"=>"UK",
        "Email"=>"Heni@gmail.com"],
    ];

    echo "<table border = 1>";

    foreach($users as $user)
    {
        echo "<tr>";

        foreach($user as $key => $item)
        {
            echo "<td>";

            echo "$key => $item";
            echo "<br>";

            echo "</td>";
        }

        echo "</tr>";

        echo "<br> <br>";
    }

    echo "</table>";
?>