<?php
    
    function wordToDigit($word)
    {
        switch ($word) {
            case "one" :
                echo "1";
                break;
            case "two" :
                echo "2";
                break;
            case "three" :
                echo "3";
                break;
            case "four" :
                echo "4";
                break;
            case "five" :
                echo "5";
                break;
            default:
                echo "default";
        }
    }
    wordToDigit('one');
    wordToDigit('two');
    wordToDigit('three');
    wordToDigit('four');
    wordToDigit('five');
?>