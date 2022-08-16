<!DOCTYPE>
<html>
    <head>
        <title>color</title>
    </head>
    <body>
        <?php
            $word = "sajid";
            $word = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$word);
            echo $word;
        ?>
    </body>
</html>
