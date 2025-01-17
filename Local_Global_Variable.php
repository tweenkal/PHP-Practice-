<!-- 👉Local variable :-A local variable is a variable that is 
 only available within the scope of a function or block of code
 
 
 👉Global variable :- A global variable is a variable that can be 
 accessed throughout a program, and is not limited to a specific 
 function-->


<!-- 👉Local varible:- -->

<?php

    function getname(){
        $name = "Twinkal";
        echo $name;
    }

    getname();

    echo "<br>";
?>

<!-- 👉Global variable -->

<?php

    $name = "Tinku";

    function getname1(){
    
    }

    echo $name;
    getname1();

    echo "<br>";

?>

<!-- 👉Local and Global variable have a same name -->

<?php

    $name = "Heny";

    function setname()
    {
        $name = "tinku";
        echo "Local var :$name";
    }

    echo $name;

    echo "<br>";

    setname();

    echo "<br>";
    
?>

<!-- 👉Using global keyword -->

<?php

    $name = "Heny";

    function setname1()
    {
        $name = "tinku";
        // echo "Local var :$name";
        global $name;
    }

    echo $name;

    echo "<br>";

    setname1();
?>

<!-- 👉Inside function change the Global variable but need to global keyword  -->


<?php

    $name = "Heny";

    function setname2()
    {
        // $name = "tinku";

        global $name;
        $name = "Jay";
        echo "Local var :$name";
    }


    setname2();
    echo "<br>";
    echo $name;

    echo "<br>";
?>

<!-- 👉 Variable in nested function-->

<?php

    $name = "Tinku";

    function test()
    {
        $name = "Heny";
        echo $name;

        function Innertest()
        {
            global $name;
            echo $name;
        }
    }

    test();
    echo "<br>";
    Innertest();
    echo "<br>";
    echo $name;
?>