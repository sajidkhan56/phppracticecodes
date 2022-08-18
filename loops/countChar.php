<?php
    $string = "tatatat";

    $count = 0;
    for($i = 0; $i < strlen($string); $i++) {
        if ($string[$i] == 't') {
            $count++;
        }
    }

    echo $count;
?>