<?php
    $temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

    $temp_array = explode(',', $temp);
    $length = sizeof($temp_array);
    $sum = 0;
    for ($i = 0; $i<$length; $i++) {
        $sum = $sum + $temp_array[$i];
    }
    echo "Average:".$sum/$length;
?>