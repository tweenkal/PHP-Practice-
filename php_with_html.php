<!-- php inside html -->

<?php
    echo "<h1 style='color:blue'>Twinkal</h1>";
    echo "<h3 style='color:red'>Twinkal</h3>";
?>

<?php
    $name = "Twinkal pansuriya";
    echo "<h1 style= 'color:aqua'>$name</h1>";
    echo "<h2 style='color:purple'>$name</h2>";
?>


<!-- html inside php -->

<h1 style="color: green">
    <?php 
        echo $name;
    ?>
</h1>


<!-- add some style with php -->

<?php
    $h2_color = "red";
?>

<h1 style="color:<?php echo  $h2_color = "red"?>">
    <?php
        echo $name;
    ?>
</h1>

<h2 style="color: <?php echo $h2_color?>">
    <?php
        echo "my name is twinkal pansuriya";
    ?>
</h2>