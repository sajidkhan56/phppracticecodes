<?php
    $file = fopen("sample-spreadsheet-100-rows.csv", "r") or die("Unable to open file!");
    
    while(!feof($file)) {
         print_r(fgetcsv($file));
         echo "</br>";
       }
    
       fclose($file);
?>