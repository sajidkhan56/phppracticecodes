<?php
    function number($n)
    {
       $message =  $n > 30 ? "Number is greater than 30" : ( $n > 20 ? "Number is greater than 20" : ( $n > 10 ? "Number is greater than 10": "None" ));
       echo $message; 
    } 
    number(15);
?>