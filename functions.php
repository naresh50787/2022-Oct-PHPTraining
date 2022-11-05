<?php

/*
Funciton is a set of instructions or block of code which will execute when calling of the function.
function functionname(){

}
*/

// function msg(){
//     echo "Welcome to PHP";
// }

// msg();
// msg();
// msg();
// msg();
// msg();
// msg();
// msg();
//Function with parameters
// function add($a, $b){
//     return $a+$b;
// }

// $output = add(10,20);
// echo $output;

// Funciton with default values

// function mult($n, $m=2){
//     return $n * $m;
// }

// echo mult(10);
// echo "<br>";
// echo mult(20,30);

// Function with pass by value and pass by refference

function inc($a){
    $a++;
    //global $n;
    echo "a inside fun".$a."<br>";
    echo "n inside fun".$GLOBALS['n']."<br>";
    echo "n inside fun".$n."<br>";
}
$n =10;
inc($n);

echo "n=".$n;
echo "a=".$a;
