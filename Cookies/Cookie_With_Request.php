<?php

    if(isset($_POST['button']))
    {
        if($_POST['button'] == "set")
        {
            $val = $_POST['user'];
            setcookie("user", $val);
            echo "Cookie is set";
        }

        if($_POST['button'] == "display")
        {
            if(isset($_COOKIE['user']))
            {
                echo $_COOKIE['user'];
            }
            
        }

        if($_POST['button'] == "delete")
        {
            if(isset($_COOKIE['user']))
            {
                setcookie('user'  , -1);
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie with request</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name = "user" placeholder="Enter user name" />
        <br>
        <br>

        <button name="button" value="set">Set cookie</button>
        <br>
        <br>

        <button name="button" value="display">Display cookie</button>
        <br>
        <br>

        <button name="button" value="delete">Delete cookie</button>
        <br>
        <br>
    </form>
</body>
</html>

