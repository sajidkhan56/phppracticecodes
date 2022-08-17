<?php
    function table($n)
    {
        for ($i = 1; $i<=10; $i++) {
            echo $n." * ".$i." = ".$n*$i."\n";
        }
    }
    table(2);
?>