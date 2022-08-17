<?php
    function primeNumber()
    {
        for ($i = 2; $i < 200; $i++) {
            $is_prime = true;
            for ($j = 2; $j <= ($i/2); $j++) {
                if($i % $j == 0) {
                    $is_prime = false;
                    break;
                }
            }
            if($is_prime) {
                echo $i." is prime ";
            }
        }
    }
    primeNumber();
?>