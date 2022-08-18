<?php
    
    $random_number = range(10, 100);
    shuffle($random_number);

    for( $i = 0; $i <10; $i++) {

        echo $random_number[$i]." ";
    }
?>