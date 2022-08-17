<?php
    $list1 = [1,2,3,4,5];
    $list2 = [6,7,8,9,10];
    $length = sizeof($list1);
    for($i = 0; $i < $length; $i++) {
        echo $list1[$i]*$list2[$i]." \n";
    }
?>