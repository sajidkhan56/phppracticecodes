<?php
    $number = 378;
    $length = strlen($number);
    $sum = 0;
    for ($i = 0; $i < $length; $i++)
    {
        $last = $number % 10;
        $number = $number / 10;
        $sum = $sum + $last;
    }
    echo "Sum: ".$sum;
    
?>