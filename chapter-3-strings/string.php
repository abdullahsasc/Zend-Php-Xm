<?php 

$foo = '12365421152152152';
$str = <<<'HDOC'
$foo Looking to update current FinTech/Payments  Consulting Website on WIX in  1-2 weeks.
Updates
- Clean layout
- professional look
- Refresh Design
- add client page
- add blog page
HDOC;

$string = 'Looking to update current FinTech/Payments  Consulting Website on WIX in  1-2 weeks.';
//echo substr($string, 20);

//echo strpos($string, 'weeks');

$s1 = "Fine";
$s2 = "FinE";
if(strcmp($s1, $s2) == 1){
    //echo true;
}

//Lavenshtein 
$s1 = 'Noman';
$s2 = 'Nommanjdkfsdkjfnsdkjnfjnkj';

//echo levenshtein($s1, $s2);

$sound = 'Hi I am Apple';
//echo soundex($sound);   

/**
 * String Array
 */
$name = 'Noman, Naeem, Nishu';
//print_r(explode(',', $name));

$array = [
    'Apple', 'Microsoft', 'WeDevs', 'Adobe'
];
//print_r(implode(',', $array));

