<?php
function get_scheme($html) {   
    preg_match_all('/sc-(.*?)\s*=\s*"(.*?)"/', $html, $matches, PREG_SET_ORDER);
    $result = [];
        foreach ($matches as $match) {
            // print_r($match);
            $result[] = [$match[1] => $match[2]];
        }
    return $result;
}
$html = '<div sc-prop sc-alias="tes" sc-type="Organization"><div sc-name="Alice">Hello <i sc-name="Wonderland">World</i></div></div>';
$attributes = get_scheme($html);
print_r($attributes);