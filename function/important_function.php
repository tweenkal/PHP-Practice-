<?php

    // 1.Len():-

    $str = "Twinkal Pansuriya";
    echo strlen($str);
    echo "<br>";

    // 2.var_dump():-
    $var = true;
    echo var_dump($var);
    echo "<br>";

    // 3.date():-
    echo date("d.m.y");
    echo "<br>";

    // 4.phpinfo():-
    // echo phpinfo();

    // 5.is_string():-
    $var = "Tinku";
    echo is_string($var);
    echo "<br>";

    // 6.rand():-
    echo rand();
    echo "<br>";


    // 7.substring():-
    $str1 = "Tinku";
    echo substr($str1,2);
    echo "<br>";

    
    // 8.befor() , after() , exit():-
    echo "before";
    exit();

    echo "after";
?>