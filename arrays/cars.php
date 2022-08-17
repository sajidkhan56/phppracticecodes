<?php
    $arr = array('Dastun', 'Honda', 'BMW');
    sort($arr);
    foreach($arr as $value) {
        echo "<li>".$value."</li></br>";
    }

    //get second element of the array
    echo $arr[1];
?>