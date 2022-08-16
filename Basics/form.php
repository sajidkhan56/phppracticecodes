<!DOCTYPE>
<html>
    <head>
        <title>form</title>
    </head>
    <body>
        <form action="" method="get">
            <label>Enter your name:</label>
            <input type="text" name="name" />
            <input type="submit"/>
        </form>
    </body>
</html>
<?php
    echo $_GET['name'];
?>