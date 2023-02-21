<?php

// ghფგფჰგ
$text ='hj';


var_dump($text);

print_r(text_to_array($text));







function text_to_array ($text) {

    $text = str_replace(',', ';', $text);
    $text = str_replace(' ', '', $text);
    $array = explode(";",$text);

    return $array;    
}
