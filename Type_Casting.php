<!-- 👉Type Casting
 
1)string - convert to datatype string
2)int    - convert to datatype int
3)float  - convert to datatype float
4)bool   - convert to datatype boolean
5)array  - convert to datatype array
6)object - convert to datatype object
7)unset  - convert to datatype null

👉Note :- here sting to array and array to string conversion is not
 possible in type casting-->


<?php

    // 1)convert to  string.

    $a = 500;
    $a = (string) $a;
    var_dump($a);

    echo "<br>";

    // 2)Convert to int

    $b = "hello";
    $b = (int) $b;
    var_dump($b);

    echo "<br>";

    // 3)Convert to float
    $c = 10;
    $c = (float) $c;
    var_dump($c);

    echo "<br>";

    // 4)Convert to boolean
    $d = "Hiii";
    $d = (boolean) $d;
    var_dump($d);

    echo "<br>";

    // 5)Convert to array.
    $e =  10;
    $e = (array) $e;
    var_dump($e);
?>