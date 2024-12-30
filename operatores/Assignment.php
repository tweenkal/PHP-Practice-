<!-- 👉What is assignment operatores.
     👉The PHP assignment operators are used with numeric values
      to write a value to a variable. 
      
      👉 = , += , -= , *= , /= , %=-->


    <?php
    
        $a = 20;
        $b = 10;

        $a = $b;

        $a += $b;
        // $a = $a + $b;

        $a -= $b;
        // $a = $a - $b;

        $a *= $b;
        // $a = $a * $b;

        $a /= $b;
        // $a = $a /= $b;


        $a %= $b;
        // $a = $a % $b;

        $a **= $b;
        // $a = $a ** $b;
        
        echo $a;
    ?>