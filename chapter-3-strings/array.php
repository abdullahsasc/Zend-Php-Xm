<?php 

$array = [
    1,2,3,4,5,6,7,8,9
];

array_slice($array, 0, 2);


//print_r($array);
//exit;

/**
 * Array Range
 */

 $num = range(1.1, 10.1);
 //print_r($num)
 


/**
 * Loop
 */

 $num = [
     'a',
     'b',
     'c',
     'd',
     'e'
 ];

//  for($i = 0; $i < count($num); $i++){
//     echo $num[$i] . PHP_EOL;
//  }

foreach($num as $f){
    echo $f . ' ';
}