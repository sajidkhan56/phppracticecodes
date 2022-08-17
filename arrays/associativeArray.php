<?php 
    echo "Befor insertion</br>";
    $arr = array("0" => "sajid", "1" => "khan");
    foreach ($arr as $key => $value) {
        echo $key." ".$value."</br>";
    }

    //insertion in the array
    echo "After Insertion</br>";
    array_push( $arr,'#');
    foreach ($arr as $key => $value) {
        echo $key." ".$value."</br>";
    }
?>