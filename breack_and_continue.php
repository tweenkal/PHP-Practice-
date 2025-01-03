<!-- 👉Breack :- here breack means the stop the code execution the
                  it use the brack statement. 
                  
     👉continue :- here continue means the code is miss the one
                   statement for example in loop print the 1 to 10 
                   number but miss the 3rd statement then it is used 
                   the continue statement.-->


<!-- 👉Breack -->

<?php

    echo "Breack statement <br>";
    $user_need = 5;

    for($i=0 ; $i<=10 ; $i++)
    {
        echo $i;
        echo "<br>";
        if($i == 5)
        {
            break;
        }
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
?>


<!-- 👉Continue -->

<?php

    echo "Continue statement<br>";
    for($i=0 ; $i<=10 ; $i++)
    {
        if($i==3 || $i==7)
        {
            continue;
        }

        echo $i;
        echo "<br>";
    }
?>


<!-- 👉note:- If the condition continues without any effect, nothing 
               will print. -->