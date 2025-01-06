<!-- 👉Function :- function is a block of code. it used for a specific reson.
     👉Types of function :-
     1)User defind fuction
     2)in-built function
     
     👉Note :- function is call to another inside function yes or no 
        ans :- yes-->


<?php

    function dummy()
    {
        echo "<h1>User Details:</h1>";
    }
    
    function displayUserdetails()
    {
        dummy();
        echo "User Name :- Twinkal";
        echo "<br>";
        echo "User Age : 20";
        echo "<br>";
        echo "User Email : abc@gmail.com";
        echo "<br>";
        echo "<hr>";
    }

    displayUserdetails();
    displayUserdetails();
    displayUserdetails();
    displayUserdetails();

?>