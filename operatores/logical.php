<!-- 👉logical :- types of logical operator
 1) and 2) or 3)xor 4)not -->


<!-- 1)And -->
<?php

    $a = 10;
    $b = 20;

    if($a==10 && $b==20)
    {
        echo "condition is true";
    }
?>

<!-- 2)OR -->

<?php

    $a = 10; 
    $b = 20;

    if($a==10 || $b==40)
    {
        echo "condition is true";
    }
?>

<!-- 3)xor:- here 1 condition is true and one condition is false then
     it will be executed -->

<?php

    $a = 10;
    $b = 20;

    if($a==10 xor $b==30)
    {
        echo "condition is true";
    }
?>

<!-- 4)not -->

<?php

    $a = 10;
    $b = 20;

    if($a!=100)
    {
        echo "condition is true";
    }
?>