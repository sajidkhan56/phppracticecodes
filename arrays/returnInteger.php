<?php
function integers(Array $values) 
{
    return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(integers(array(3,4,6,12,300,1,7))."\n");
?>