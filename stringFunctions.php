<?php
/*

strlen - is the find the lenght of the string
substr - is to find/get the sub set fo the string
str_replace - it will search spefic string and replace with new value
str_repeate - it will repeate the string with n of times
strpos - it used to find specif string position in a string
explode - it used to convert string into array with given seperator
trim - it used to remove the empty/special characters at both ends of the string
ltrim - it used to remove the empty/special characters at left side of the string
rtrim - it used to remove the empty/special characters et right side of tht string
strtolower - it will convert all leters of the string into small case or lower letters
strtoupper - it will convert all leters of the string into  captial letters
ucfirst - it will convert first leter of the string into captial letter
ucwords - it will convert all words first letter of the string into captial letter
strrev - it used to reverse the string
*/

$str = "welcome to php";

//echo strlen($str);
//echo substr($str, 7,7);
//echo $str2 = str_replace('PHP', 'two', $str);
//echo str_repeat($str, 10);
//var_dump(strpos($str, 'PHP'));

//$hobbies = 'cricket:chess:vallyball:carroms:cycling';
//$arr = explode(" ", $str);
// $arr = explode(":", $hobbies);
//echo "<pre>";
// print_r($arr);

// var_dump($str);
// $str2 = trim($str, '[');

// var_dump($str2);
// $str2 = ltrim($str, '<');
// $str2 =  rtrim($str2, '>');
// var_dump($str2);

//echo strtolower($str);
//echo strtoupper($str);
//echo ucfirst($str);
//echo ucwords($str);
echo strrev($str);