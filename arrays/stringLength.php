<?php
    $string = ['sajid khan', 'sarbaz khan', 'hasnat ahmad khan', 'mujahid khan'];
    $lengths = array();

    foreach ($string as $value) {
        $length = strlen($value);
        array_push($lengths, $length);
    }

    $max_length = max($lengths);
    $min_length = min($lengths);

    echo "Max Length:".$max_length."</br>Min Length:".$min_length;
?>