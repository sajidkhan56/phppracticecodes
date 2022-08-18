<?php
    $all_numbers = array();
    for ( $i = 50; $i <= 150; $i++) {

        if ($i % 4 == 0) {
            array_push($all_numbers, $i);
        }
    }
    var_dump($all_numbers);
?>