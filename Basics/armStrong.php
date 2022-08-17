<?php

    function armStrong($n)
    {
        $length = strlen($n);
        $arr = (string)$n;
        $sum = 0;
        for ($i = 0; $i < $length; $i++) {
            $sum = $sum + pow($arr[$i], $length);
        }
        if ( $sum == $arr) {
            echo "The given number is ArmStrong\n";
        } else {
            echo "The given number is not ArmStrong\n";
        }
    }
    armStrong(371);
    armStrong(1);


?>