<!--👉 in php super global variable is simillar to the global variable 
 but is not make the user is already bydefault make in php it is 
 pre-defind variable
 
 👉Types of super global variable :
 
 1)$_GLOBALS
 2)$_SERVER
 3)$_REQUEST
 4)$_POST
 5)$_GET
 6)$_FILES
 7)$_COOKIE
 8)$_SESSION
 9)$_ENV-->

<?php

    $a = 10;
    $data = 20;

    // $GLOBAL :- show all the user defind variable in this file.
    
    echo "<pre>";
    print_r($GLOBALS);

    //  $_SERVER :- $_SERVER is a PHP super global variable which 
    //  holds information about headers, paths, and script locations.
    // show the php server.
    print_r($_SERVER['REQUEST_TIME']);

    // $_REQUEST :- $_REQUEST is a PHP super global variable which
    //  contains submitted form data, and all cookie data.
    // In other words, $_REQUEST is an array containing data from 
    // $_GET, $_POST, and $_COOKIE.
    print_r($_REQUEST);

    // $_GET :- $_GET contains an array of variables received via 
    // the HTTP GET method.
    print_r($_GET);

    // $_POST :- $_POST contains an array of variables received via
    //  the HTTP POST method.
    print_r($_POST);
    echo "</pre>";

   
?>