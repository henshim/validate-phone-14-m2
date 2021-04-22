<?php
function check($input){
    $pattern="/^[()0-9{2}]+-[()0-9{9}][^$&?]/";
    if (preg_match_all($pattern,$input)){
        echo 'valid';
    }else{
        echo 'invalid';
    }
}
$string='(84)-(0978489648)';
check($string);