<?php
function fibonacci($n) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    echo "Fibonacci Series: ";
    
    foreach ($fib as $value) {
        echo $value . ' ';
    }
}

fibonacci(10);
?>


<!-- another solution; -->

<?php
$a = 0;
$b = 1;
echo "$a,$b,";
for ($n=0; $n<=7; $n++){
    $temp = $a+$b;
    echo "$temp,";
    $a = $b;
    $b = $temp;
}

?>
