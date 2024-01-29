<?php
//diketik
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        return false;
    }
}

return true;

}

$angka1 = 17;
$angka2 = 45;

if (isPrime($angka1)) {
    echo "$angka1 adalah bilangan prima.";
} else {
    echo "$angka1 bukan bilangan prima.";
}

echo "<br>";

if (isPrime($angka2)) {
    echo "$angka2 adalah bilangan prima.";
} else {
    echo "$angka2 bukan bilangan prima.";
}

?>