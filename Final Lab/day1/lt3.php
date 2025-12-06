<?php

echo "Numbers from 1 to 20:<br><br>";
for($i=1; $i<=20; $i++){
    echo $i." ";
}
echo "<br><br>";

echo "Even Numbers from 1 to 20:<br><br>";
$counter = 1;
while($counter <= 20){
    if($counter % 2 == 0){
        echo $counter." ";
    }    $counter++;
}
echo "<br><br>";

echo "Associative Arr:<br><br>";
$fruits = array(
    "apple" => "red",
    "banana" => "yellow",
    "orange" => "orange",
    "grape" => "purple",
    "kiwi" => "green",
    "strawberry" => "red",
    "blueberry" => "blue",
    "watermelon" => "green",
    "pineapple" => "yellow",
    "mango" => "orange");

echo "Total fruits: " . count($fruits)."<br>";

foreach($fruits as $fruit => $color){
    echo "<br>The color of " . ucfirst($fruit) . " is " . $color . "."."<br>";
}

for ($i = 1; $i <= 20; $i++) {
    echo $i . " ";
    if ($i == 5) {
        echo "<br><strong>Break statement executed......</strong>";
        break;
    }
}
echo "<br><br>";

?>