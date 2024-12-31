<!-- 👉Inc / Dec operator:-
     👉four types of inc and dec operator:-
     1)Pre-increment and post-increment.
     Exa:- ++a , a++
     2)Pre-decrement and post-decrement.
     Exa:- --a , a--.
-->


<!-- 1.Pre-increment operator -->

<?php
    $a = 10;

    echo "Pre Increment:-";
    echo "<br>";
    echo "<br>";

    echo ++$a;
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "----------------";
    echo "<br>";
?>

<!-- 2.Post-increment operator -->

<?php
    $a = 10;

    echo "Post-increment:-";
    echo "<br>";

    echo $a++;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo $a; 
    
    echo "<br>";
    echo "<br>";
    echo "-------------------";
    echo "<br>";
?>

<!-- 3.Pre-decrement operator -->
<?php
    $a = 10;
    echo "Pre-decrement:-";
    echo "<br>";
    echo --$a;

    echo "<br>";
    echo "<br>";

    echo "-----------------";
    echo "<br>";
?>

<!-- 4.Post-decrement operator -->

<?php
    $a = 10;

    echo "Post-decrement:-";

    echo "<br>";

    echo $a--;

    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo $a;
?>