<?php
function pattern_counthat($string, $match) {
    $char = str_split($string);
    $matchChar = str_split($match);
    $result = 0;
    $currentIndex = 0;

    for($i=0; $i < count($char); $i++){
        if($char[$i] == $matchChar[$currentIndex]) {
           $currentIndex++;
        } else {
            $currentIndex = 0;
        }
        if($currentIndex == count($matchChar)) {
            
            $currentIndex = 0;
            $result++;
            $i--;
        }
    }

    return $result;
}

$string1 = "palindrom";
$match1 = "ind";

$string2 = "abakadabra";
$match2 = "ab";

$string3 = "hello";
$match3 = "";

$string4 = "ababab";
$match4 = "aba";

$string5 = "aaaaaa";
$match5 = "aa";

$string6 = "hell";
$match6 = "hello";

echo pattern_counthat($string1, $match1);
echo "<br>"; 
echo pattern_counthat($string2, $match2);
echo "<br>";
echo pattern_counthat($string3, $match3);
echo "<br>";
echo pattern_counthat($string4, $match4);
echo "<br>";
echo pattern_counthat($string5, $match5);
echo "<br>";
echo pattern_counthat($string6, $match6);