<!-- 👉Parametrized function:-When we pass some data while calling 
                              a function, it is called a
                              parameterized function. -->

                    
<?php
    function sum($a , $b)
    {
        echo $a + $b;
        echo "<br>";
    }

    sum(10 , 20);

    sum(30 , 40);

    sum(20 , 30);


    function userdata($name , $color)
    {
        echo "<h1 style = 'color:$color'>$name</h1>";
        echo "<br>";
    }

    userdata("Twinkal","green");

    userdata("Pansuriya","aqua");

    userdata("Tinku","purple");
?>

