<?php
    $email = "sajid.web56@gmail.com";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {     
    
        echo '"' . $email . '" is valid Email ID'."\n";
    } else {  

        echo '"' . $email . '" is invalid Email ID'."\n";
    }
?>