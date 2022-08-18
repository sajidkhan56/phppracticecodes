<?php
    
    $string = "sajid khan";
    //lower to upper case
    $string = strtoupper($string);
    echo $string."</br>";
    //upper to lower case
    $string = strtolower($string);
    echo $string."</br>";

    //convert first char uppar case 
    $string = ucfirst($string);
    echo $string."</br>";   

    //convert all first char to uppar case
    $string = ucwords($string);
    echo $string."</br>"; 

    //split string
    $string = substr(chunk_split($string, 2, ' '), 0, -1);
    echo $string."</br>";

    //get name from email
    $email  = 'sajid.web56@gmail.com';
    $name = strstr($email, '@', true);
    echo $name."</br>";
    
    //last three chars
    echo substr($name, -3)."</br>";

    //string replace
    echo preg_replace('/sajid/', 'khan', $email, 1)."</br>";

    //genrate random password for sting
    echo substr(str_shuffle($name), 0, 10)."</br>";

    //remove commas from string
    $str = "12,342.78";
    $num = str_replace( ',', '', $str);
    if( is_numeric($num))
    {
        echo $num."</br>";
     }

?>