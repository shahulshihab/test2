
<?php
/**
* 1. Write a script that accepts a positive integer range and, for each increment in the range, prints:
"Fizz" if a multiple of 3
"Buzz" if a multiple of 5
The integer itself otherwise.
E.g. for f[12..16], the output is "Fizz 13 14 FizzBuzz 16".
*/
$val=range(12,16);
foreach ( $val as $value) {
    if( $value < 0 ){
        print "Please provide integer numbers! ";
        return;
    }
}
$maxValue = max($val);
$minValue = min($val);
for($i=$minValue; $i<= $maxValue; $i++){
    $str = "";

    if (!($i % 3 ) )
    $str .= "Fizz";

    if (!($i % 5 ) )
    $str .= "Buzz";

    if ( empty( $str ) )
    $str = $i;

    echo $str . "\n";
} 
?>
