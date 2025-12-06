<?php

function sum($a, $b) {
    return $a + $b;
}

echo sum(5, 10)."<br>";

function factorial($n){
    if($n <= 1){
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

echo factorial(3)."<br>";

$test_numbers = [0, 1, 2, 3, 4, 5, 6, 7];
foreach ($test_numbers as $num) {
    echo "factorial($num) = " . factorial($num) . "<br>";
}

function factorial_iterative($n) {
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

echo "factorial_iterative(5) = " . factorial_iterative(5) . "<br>";
echo "factorial_iterative(7) = " . factorial_iterative(7) . "<br>";

echo "<h3>3. is_prime() Function</h3>";

function is_prime($n) {
    if ($n < 2) {
        return false;
    }
    
    
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) {
            return false; 
        }
    }
    
    return true; 
}


function is_prime_optimized($n) {
    
    if ($n < 2) return false;
    if ($n == 2 || $n == 3) return true;
    if ($n % 2 == 0 || $n % 3 == 0) return false;
    
    
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
            return false;
        }
    }
    
    return true;
}

echo "<h4>Testing Prime Numbers (0-30):</h4>";
$prime_test_numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30];

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Number</th><th>Prime?</th></tr>";

foreach ($prime_test_numbers as $num) {
    $isPrime = is_prime($num);
    echo "<tr>";
    echo "<td>$num</td>";
    echo "<td>" . ($isPrime ? "Yes" : "No") . "</td>";
    echo "</tr>";
}
echo "</table>";


echo "<h4>Testing Specific Numbers:</h4>";
$specific_tests = [41, 49, 53, 97, 100, 101, 113, 121, 127];

foreach ($specific_tests as $num) {
    $isPrime = is_prime($num);
    echo "$num is " . ($isPrime ? "" : "not ") . "a prime number<br>";
}


echo "<h3>4. Combined Function Demonstrations</h3>";

echo "<strong>Function Combination Examples:</strong><br>";

$num1 = 17;
$num2 = 23;
$sum_result = sum($num1, $num2);
echo "$num1 + $num2 = $sum_result, and $sum_result is " . 
     (is_prime($sum_result) ? "prime" : "not prime") . "<br>";

$fact_num = 5;
$fact_result = factorial($fact_num);
echo "factorial($fact_num) = $fact_result, and $fact_result is " . 
     (is_prime($fact_result) ? "prime" : "not prime") . "<br>";

echo "<h4>Prime Factorial Results:</h4>";
for ($i = 1; $i <= 7; $i++) {
    $fact = factorial($i);
    echo "factorial($i) = $fact - " . 
         (is_prime($fact) ? "Prime" : "Not Prime") . "<br>";
}

echo "<h3>Function Summary</h3>";

function display_function_info($function_name, $description, $parameters) {
    echo "<div style='background-color: #f0f0f0; padding: 10px; margin: 10px 0; border-left: 4px solid #007bff;'>";
    echo "<strong>Function:</strong> $function_name<br>";
    echo "<strong>Description:</strong> $description<br>";
    echo "<strong>Parameters:</strong> $parameters<br>";
    echo "</div>";
}

display_function_info(
    "sum(\$a, \$b)", 
    "Returns the sum of two numbers", 
    "\$a (number), \$b (number)"
);

display_function_info(
    "factorial(\$n)", 
    "Computes factorial using recursion", 
    "\$n (non-negative integer)"
);

display_function_info(
    "is_prime(\$n)", 
    "Checks if a number is prime", 
    "\$n (integer)"
);

?>