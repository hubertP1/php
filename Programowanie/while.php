<?php

// Zadanie 1
echo "Zadanie 1 ----------------------";

$liczba = 10;
while ($liczba > 0) {
    echo "\n" . $liczba;
    $liczba--;
}

// Zadanie 2
echo "\n\nZadanie 2 ----------------------";
$start = 1;
$stop = 20;
$i = $start;

$suma = 0;

do {
    $suma += $i;
    $i++;
} while ($i <= $stop);

echo "\nSuma liczb od $start do $stop: " . $suma;

// Zadanie 3
echo "\n\nZadanie 3 ----------------------";
$a = 64;
$b = 16;

echo "\nNWD($a,$b) = ";
while ($a != $b) {
    if ($a > $b) {
        $a = $a - $b;
    } else {
        $b = $b - $a;
    }
}

echo $a;

// Zadanie 4
echo "\n\nZadanie 4 ----------------------";

$cyfra = 98765;

$suma = 0;

echo "\nSuma cyfr liczby $cyfra = ";
while ($cyfra > 0) {
    $suma += ($cyfra % 10);
    $roznica = ($cyfra % 10);
    $cyfra = ($cyfra - $roznica) / 10;
}
echo $suma;