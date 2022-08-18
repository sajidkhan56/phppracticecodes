<?php
    $temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

    $temp_array = explode(',', $temp);
    $length = sizeof($temp_array);
    $sum = 0;
    for ($i = 0; $i<$length; $i++) {
        $sum = $sum + $temp_array[$i];
    }
    echo "Average:".$sum/$length."</br>";
    echo "Five Lowest:";
    for($i = 0; $i < 5; $i++) {
        
        $min = min($temp_array);
        echo $min." ";

        foreach($temp_array as $key => $value) {
            if ($temp_array[$key] == $min) {
                unset($temp_array[$key]);
            }
        }

    }
    echo "</br>Five Highest:";
    for($i = 0; $i < 5; $i++) {
        
        $max = max($temp_array);
        echo $max." ";

        foreach($temp_array as $key => $value) {
            if ($temp_array[$key] == $max) {
                unset($temp_array[$key]);
            }
        }

    }
?>