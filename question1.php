<?php
function sum_deep($data, $find) {

    $result = 0;

    foreach($data as $item) {
        if(is_array($item)) {
            $value = sum_deep($item, $find);
            if($value > 0) {
                $result = $result + 1 + $value;
            } 
        } else {
            if(strpos($item, $find) !== false) {
                $result++;
            }
        }
    }
    return $result;
}

$data = [
    'ABAH', 
    ['CIRCA'], 
    ['CRUMP', ['IRA']],
    ['ALI']
  ];

$string = "ACI";
$string = str_split($string);

$result = 0;
$index = 1;

foreach($string as $str) {
    $result = $result + (sum_deep($data, $str) * $index);
    $index++;
}

echo $result;