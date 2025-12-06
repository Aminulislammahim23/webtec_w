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


echo "<strong>String:</strong><br>";
var_dump($stringVar);
echo "<br><br>";

echo "<strong>Integer:</strong><br>";
var_dump($intVar);
echo "<br><br>";

echo "<strong>Float:</strong><br>";
var_dump($floatVar);
echo "<br><br>";

echo "<strong>Boolean:</strong><br>";
var_dump($boolVar);
echo "<br><br>";

echo "<strong>First int:</strong><br>";
var_dump($int1);
echo "<br><br>";

echo "<strong>Second int:</strong><br>";
var_dump($int2);
echo "<br><br>";

echo "<strong>First float:</strong><br>";
var_dump($float1);
echo "<br><br>";

echo "<strong>Second float:</strong><br>";
var_dump($float2);
echo "<br><br>";

echo "<strong>Sum:</strong><br>";
var_dump($sum);
echo "<br>";

?>