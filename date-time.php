<?php

/**
 * Date Time Interval class :)
 * @OOP
 */
try {
    $format = 'Y-m-d';
    $today = new DateTimeImmutable();
    $yesterday = $today->sub(new DateInterval('P3D'));
} catch (Exception $e) {

}
//echo "Today: ". $today->format($format) . PHP_EOL . "Yesterday: ".$yesterday->format($format);

/**
 * Date time difference
 * @OOP
 */
$output = 'Today: ' . $today->format($format) . PHP_EOL;
$output .= 'Yesterday: ' . $yesterday->format($format) . PHP_EOL;
$output .= 'Difference: ' . $today->diff($yesterday)->format('%R%a days');

//echo $output;

/**
 * Date time Functional Counterpart :D
 * @procedural
 */

try {
    $format = 'Y-M-d';
    $today = date_create();
    $yesterday = clone $today;
    $yesterday = date_sub($yesterday, date_interval_create_from_date_string('1 Days'));
} catch (Exception $e){

}
$output = "Today: ".date_format($today, $format).PHP_EOL;
$output .= "Yesterday: ".date_format($yesterday, $format).PHP_EOL;
$output .= "Diff: ". date_diff($today, $yesterday)->format('%R%a Days');

echo $output;
