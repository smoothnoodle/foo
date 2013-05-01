<?php

$txt="Hello world!";
echo $txt."<br>";

$txt1="Hello world!";
$txt2="What a nice day!";
echo $txt1 . " " . $txt2."<br>";

echo strlen("Hello world!")."<br>";

echo strpos("Hello world!","world");


$rest = substr("abcdef", 0, -1);  // returns "abcde"
$rest = substr("abcdef", 2, -1);  // returns "cde"
$rest = substr("abcdef", 4, -4);  // returns false
$rest = substr("abcdef", -3, -1); // returns "de"

?>