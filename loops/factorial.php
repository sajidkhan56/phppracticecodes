<?php
    $num = 6;
    $fac = $num * ($num--);
    for( $i = ( $num-2 ); $i > 0; $i--) {
        $fac = $fac + ( $fac * $i );
    }
    echo $fac;
?>