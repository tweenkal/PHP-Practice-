<!-- 👉else-if :- here if statement is true then it is executed the
                  if block but condition is false then it check the 
                  second condition and it is false then print the 
                  else statement its called if inside if -->



<?php
    $age = 20;

    if($age < 18)
    {
        echo "age is less than 20";
    }

    elseif($age > 20)
    {
        echo "age is grater than 20";
    }

    elseif($age > 18)
    {
        echo "age is grater than 18";
    }

    else
    {
        echo "other";
    }
?>