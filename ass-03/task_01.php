<?php
//=====String Manipulation=====

$text = "The quick brown fox jumps over the lazy dog.";
function Text_modify($text) {
    // Convert lowercase
    $text = strtolower($text);
    
    // Replace "brown" with "red"
    $text = str_replace("brown", "red", $text);
    echo $text;
}
Text_modify($text);