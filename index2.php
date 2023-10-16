<?php

function count_charts($str, $x = false)
{
    if (is_string($str)) {
    $tmp = preg_split('//u', $str, -1, PREG_SPLIT_NO_EMPTY);
           foreach ($tmp as $c) {
               $chr[$c] = isset($chr[$c]) ? $chr[$c] + 1 : 1;
           }
    return is_bool($x)
        ? ($x ? $chr : count($chr))
        : $chr[$x];}
    else {
        echo 'false';
        return false;
    }
}

$str = "beverly beaver who is brown with a blue belly goes to a birthday party with her pal bob the buffalo";
print_r(count_charts($str, 'o'));
