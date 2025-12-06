<?php
    echo "<h1>PHP Variable Declaration and Operations</h1>";

$stringVar = "Hiii AIUB";
echo "String : " . $stringVar . "<br>";

$intVar = 11;
echo "Integer : " . $intVar . "<br>";
 
$floatVar = 3.1416;
echo "Float : " . $floatVar . "<br>";

$boolVar = true;
echo "Boolean : " . ($boolVar ? "true" : "false") . "<br>";

echo "<h3>2. Arithmetic Operations</h3>";

$int1 = 15;
$int2 = 7;

echo "<strong>Integer Operations:</strong><br>";
echo "$int1 + $int2 = " . ($int1 + $int2) . " (Addition)<br>";
echo "$int1 - $int2 = " . ($int1 - $int2) . " (Subtraction)<br>";
echo "$int1 * $int2 = " . ($int1 * $int2) . " (Multiplication)<br>";
echo "$int1 / $int2 = " . ($int1 / $int2) . " (Division)<br>";
echo "$int1 % $int2 = " . ($int1 % $int2) . " (Modulus)<br>";

$float1 = 10.5;
$float2 = 2.5;

echo "<br><strong>Float Operations:</strong><br>";
echo "$float1 + $float2 = " . ($float1 + $float2) . " (Addition)<br>";
echo "$float1 - $float2 = " . ($float1 - $float2) . " (Subtraction)<br>";
echo "$float1 * $float2 = " . ($float1 * $float2) . " (Multiplication)<br>";
echo "$float1 / $float2 = " . ($float1 / $float2) . " (Division)<br>";

echo "<br><strong>Mixed Operations (Integer and Float):</strong><br>";
echo "$int1 + $float1 = " . ($int1 + $float1) . " (Integer + Float)<br>";
echo "$float2 * $int2 = " . ($float2 * $int2) . " (Float * Integer)<br>";

echo "<h3>Using echo and print Statements</h3>";

$num1 = 25;
$num2 = 35;
$sum = $num1 + $num2;

echo "Using echo: The sum of $num1 and $num2 is: " . $sum . "<br>";

print "Using print: The sum of $num1 and $num2 is: " . $sum . "<br>";



?>