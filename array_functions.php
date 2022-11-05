<?php
//$arr = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
//var_dump($arr);

//echo $arr;
//print_r($arr);

//echo $arr[3];

// for($i=0; $i< sizeof($arr); $i++){
//     echo $arr[$i]."<br>";
// }

// echo $arrCount = count($arr);
// echo "<br>";
// echo $index = ($arrCount/2)-1;
// echo "<br>";
// echo $arr[$index];
// foreach($arr as $key => $val){
//     echo $key."=".$val."<br>";
// }

// $arr = array('first_name' => 'Naresh', 'last_name'=> 'Last Name', 'age'=> 20, 'DOB'=> '12-12-1222', 
//                 'contact'=> 987765544
//             );

// echo $arr['DOB'];

// for($i=0; $i< sizeof($arr); $i++){
//         echo $arr[$i]."<br>";
//     }
// echo 'Fist_name='.$arr['first_name'];
// echo "<br>";
// echo 'last_name='.$arr['last_name'];
// echo "<br>";
// echo 'age='.$arr['age'];
// echo "<br>";
// echo 'DOB='.$arr['DOB'];
// echo "<br>";
// echo 'contact='.$arr['contact'];


    // foreach($arr as $index => $value){
    //     echo $index."=".$value."<br>";
    // }

    /*
    array_push - Adds element at end of the array
    array_pop - Removes the element at end of the array
    array_unshift - Adds eleemnt at starting of the array
    array_shift - Removes the element at starting of the array
    in_array - It will return true when given value is found in the array and it will return 
                false when given value is not found in the array
    array_key_exists - It will check given key exists in the given array
    array_keys - It will return keys as new array of given array
    array_values - It will return values as new array of given array but keys will start with 0


    */
// echo "<pre>";
//     $arr = array(9=>1,2,3,4);
//      print_r($arr);
    // array_push($arr, 5);
    // //$arr[4]=5;

    // print_r($arr);

    // array_pop($arr);
    // print_r($arr);

    // array_unshift($arr, 0);
    // print_r($arr);

    // array_shift($arr);
    // print_r($arr);
    
    //var_dump(in_array(73, $arr));
    //var_dump(array_key_exists(100, $arr));

    // $arr_keys = array_keys($arr);
    // //print_r($arr_keys);

    // $arr_values = array_values($arr);
    // print_r($arr_values);


    /*
        sort - used to sort the array in accending order
        rsort - used to sort the array in deccending order
        asort - used to sort the array in accending order with same key/index value
        arsort - used to sort the array in decending order with same key/index value
        ksort  - used to sort the array keys/index in accending order
        krsort - used to sort the array keys/index in decending order
        unset - used to to remove/delete the specific key of array or entire array/variable.
        isset = used to check the array/variable is existed or not
        empty - used to check the variable having the vaule or not. It will return true if 
                it has value otherwise false
        count - used to check the lenght of the array


        
    */
    $arr = array(3,47,6,2,9,10,30,20);
    $arr_key = array(10=>1,7=>8, 3=>4);
    $msg = " this is a message";
    $arr_empty = array();
    $a;

    echo "<pre>";
    print_r($arr);
    // sort($arr);
    // rsort($arr);
    //asort($arr);
    //arsort($arr);
    //print_r($arr);
    //ksort($arr_key);
    //krsort($arr_key);
    //array_pop($arr_key);
    //unset($arr_key);
    //print_r($arr_key);

    //var_dump(isset($msgww));

    // var_dump(empty($arr));
    // var_dump(empty($arr_empty));
    // var_dump(empty($a));

    echo count($arr);

    
?>