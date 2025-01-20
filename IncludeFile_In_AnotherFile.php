<!-- 👉Include file in another file in 4 functions.
 1)include
 2)include_once 
 3)require
 4)required_once
 
 👉Why we need to include files.-->



 <!-- 1) include  :- is file is load a multiple time . include is the
   show the warning but no show the error-->

<?php

    // for($i=0 ; $i<10 ; $i++)
    // {
    //     include(".\hello.php");
    // }
    
?>

<!-- 2)include_once :- If we want to repeat any statement, we use a 
 loop, but if there is a statement that is executed only under the
loop and we want to print that statement once, we will use the
include_once function, which will print that statement only 
once even though it is under the loop.

->If the file has already been loaded, then that file will not be 
loaded again.-->
 
<?php

// for($i=0 ; $i<10 ; $i++)
// {
//     include_once(".\hello.php");
// }
?>


<!-- 3)require :- it is same of the include but here is show the 
 fetal error -->

 <?php

// for($i=0 ; $i<10 ; $i++)
// {
//     require(".\hello1.php");
// }
?>

<!-- 4)require_once :-  -->

<?php

for($i=0 ; $i<10 ; $i++)
{
    require_once(".\hello.php");
}
?>
