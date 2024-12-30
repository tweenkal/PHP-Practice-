<!--👉 Data type :- means type of data 
    👉exa.
    1.string  2.Interger  3.float 4.Boolean  5.Null  6.Array  
    7.Object(class)  8.Recourse.-->

<!-- 👉 here var_dump means the its What type of data is stored -->

<!-- 1.string -->

<?php
    $name = "Twinkal Pansuriya<br>";
    echo $name;
    echo var_dump($name);
    echo "-------------------------------<br><br>";
?>


<!-- 2.Integer -->

<?php
    $num = 100;
    echo $num,"<br>";
    echo var_dump($num),"<br>";
    echo "---------------------------<br><br>";
?>


<!-- 3.float -->
 <?php
    $num = 10.10;
    echo $num,"<br>";
    echo var_dump($num),"<br>";
    echo "---------------------------<br><br>";
 ?>


<!-- 4.Boolean -->
 <?php
    $bool = true;
    echo $bool,"<br>";
    echo var_dump($bool),"<br>";
    echo "---------------------------<br><br>";
 ?>


<!-- 5.Null -->

<?php
    $data = null;
    echo $data,"<br>";
    echo var_dump($data),"<br>";
    echo "---------------------------<br><br>";
?>

<!-- 6.Array -->

<?php
    $arr = ["Twinkal",20,"Bca","Pansuriya"];
    echo $arr,"<br>";
    echo var_dump($arr),"<br>";
    echo "---------------------------<br><br>";
?>


<!-- 7.object(class) -->

<!-- <?php
    $user = new className();
?> -->


<!-- 8.Recourse :- its connect ftp means file transfer protocol and 
 database-->

<?php
    $connection = ftp_connect("127.0.0.1") or die("localhost is not found");
    echo $connection;
    echo var_dump($connection);
?>

