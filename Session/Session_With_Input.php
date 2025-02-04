<?php

    session_start();
    if(isset($_POST['button']))
    {
        if($_POST['button'] == "set")
        {
            $val = $_POST['user'];
            $_SESSION['user'] = $val;
            echo "session is set";
        }

        if($_POST['button'] == "get")
        {
            echo $_SESSION['user'];
        }       

        if($_POST['button' == "delete"])
        {
            session_destroy();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    
    <form method="post" action="">
        <input type="text" name="user" placeholder="Enter user name" />
        <br>
        <br>
        <button name="button" value="set">Set session</button>
        <br>
        <br>
        <button name="button" value="get">Get session</button>
        <br>
        <br>
        <button name="button" value="delete">Delete session</button>
    </form>
</body>
</html>


<!-- 👉Session :- store the user information , broweser information 
                  for the server side.session store the data for 
                  the server.store the multiple information inside
                   session.session work for low speed.  -->


