<?php
    function removeDuplicates($list)
    {
        var_dump(array_unique($list));
    }
    $list = [1,1,3,3,5];
    removeDuplicates($list);
?>