<?php


$text ='hj';


var_dump($text);

var_dump(text_to_array($text));







function text_to_array ($text) {

    $text = str_replace(',', ';', $text);
    $text = str_replace(' ', '', $text);
    $array = explode(";",$text);

    return $array;    
}