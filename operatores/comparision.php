<!-- 👉Comparision operators.
     👉 It is compare to values
     
     👉 ==  :- equal to,
        !=  :- not equal to , 
        <>   :- not equal to,
        === :- identical ,
        !== :- not identical,
        >    :- greater than , 
        >=   :- grater than equal to,
        <    :- less than ,
        <=   :- less than equal to,
        <=>  :- spaceship .
     
     👉 <=> :- here spaceship operators is return a int value but 
     all comparision operators is return boolean value means true or 
     false.

     👉=== :- two values compare and also datatype compare.
     -->


     <?php
        $a = 10;
        $b = 10;
        $c = "10";
        $d = 20;
        $e = 5;


        //👉 equal to :- ==
        var_dump($a == $b);
        echo "<br>";
        var_dump($a == $d);
        echo "<br>";

        // 👉Not equal to :- != , <>
        var_dump($a != $d);
        echo "<br>";
        var_dump($a <> $c);
        echo "<br>";

        // 👉identical :- ===
        var_dump($a === $b);
        echo "<br>";
        var_dump($a === $c);
        echo "<br>";

        // 👉Not identical :- !==
        var_dump($a !== $b);
        echo "<br>";
        var_dump($a !== $d);
        echo "<br>";

        // 👉grater than or grater than equal to :- > , >=.
        var_dump($a > $d);
        echo "<br>";
        var_dump($a >= $b);
        echo "<br>";

        // 👉less than or less than equal to:- < , <=.
        var_dump($a < $d);
        echo "<br>";
        var_dump($a <= $d);
        echo "<br>";

        // 👉spaceship :- <=>.
        var_dump($a <=> $b);
        echo "<br>";
        var_dump($a <=> $d);
        echo "<br>";
        var_dump($a <=> $e);
        echo "<br>";
?>