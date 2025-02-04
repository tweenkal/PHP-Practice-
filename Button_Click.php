<!-- 👉call php function on button click 
 👉The isset function checks whether your request has arrived 
 or not.-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button click </title>
</head>
<body>
        <form action="" method="get">
            <button name="button" value="btn1">
                Click button
            </button>
        </form>
</body>
</html>

<?php

    if(isset($_REQUEST['button']))
    {
        button_click();
    }

    function button_click()
    {
        echo "Function is called";
    }
?>