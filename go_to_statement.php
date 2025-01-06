<!-- Go to statement :-The goto statement is used to jump to another
                       section of a program. It is sometimes referred 
                       to as an unconditional jump statement. The
                       goto statement can be used to jump from
                       anywhere to anywhere within a function. 
                       
                       here condition is matched the statement is
                       jump but condition is not match then 
                       statement is print and jump-->


<?php
    $num = 10;
    echo "before condition<br>";

    if($num == 20){
        goto jump;
    }


    $name = "Twinkal<br>";
    echo $name;


    jump:
    echo "statement is jumped is line num 22 <br><br>";



    // 👉loop with goto statement

    for($i=0 ; $i<=10 ; $i++)
    {
        echo "$i <br>";

        if($i==5)
        {
            goto outsideloop;
        }
    }

    outsideloop:
    echo "outside statement";
?>