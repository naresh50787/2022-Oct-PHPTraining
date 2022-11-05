<?php
/*
Notice example : calling Undefined variable
Warning : including no existig files using include/include once
Fattel error : including on existing files using require/require_once
Parse/Syntax error : Any syntax error like miss spellings or missing any , or ;
*/
//$a=10;
echo "hi";
echo $a[10];

include('test.php');
require('test.php');

//if()

?>