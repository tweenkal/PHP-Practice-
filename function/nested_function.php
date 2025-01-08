<!-- nested function :- function inside function means nested function-->

<?php

    function orange()
    {
        echo "Iorange function is called <br>";

        function apple()
        {
            echo "apple function is called";
        }

        apple();
    }

    orange();
?>