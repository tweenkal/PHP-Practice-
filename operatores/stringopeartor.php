<!-- 👉Two types of string oprator 
     👉1). operator 2).= operator 
-->

<!--  1) . :- here . is the concate the string and variable. -->

<?php
    $str1 = "Twinkal Pansuriya";
    $str2 = 20;

    echo "My name is=".$str1 , "<br>" ,"My age is=".$str2;
    echo "<br>";
    echo "<br>";
    echo "<br>";
?>

<!-- 2).= :- concate two strings (concatenate assignment)-->

<?php
    $str1 = "Hello How are you  ";
    $str2 = "My name is Twinkal pansuriya";

    $str1 .= $str2;
    echo $str1;
?>