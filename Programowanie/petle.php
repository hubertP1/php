<?php

//Zadanie 1
echo "Zadanie 1 ----------------------------";

$liczba = 3;

echo "\nWielokrotności liczby " . $liczba . ":";
for ($i = $liczba; $i <= 30; $i += $liczba) {
    echo "\n" .  $i;
}

//Zadanie 2
echo "\n\nZadanie 2 ----------------------------";

$temperatury = [18, 22, 25, 19, 30, 27];
echo "\nTablica temperatury: ";
foreach ($temperatury as $temperatura) {
    echo $temperatura . ", ";
}

//1
echo "\nTemperatury większe niz 20°C: ";
foreach ($temperatury as $temperatura) {
    if ($temperatura > 20) {
        echo $temperatura . ", ";
    }
}

//2
$ilosc_temperatury = count($temperatury);
$suma_temperatury = 0;

foreach ($temperatury as $temperatura) {
    $suma_temperatury += $temperatura;
}

$srednia_temperatury = $suma_temperatury / $ilosc_temperatury;
echo "\nŚrednia temperatur w tablicy: " . number_format($srednia_temperatury, 2);

//Zadanie 3
//1
echo "\n\nZadanie 3 ----------------------------";

$pensje = ["Ania" => 4200, "Piotr" => 3800, "Kasia" => 5100];

echo "\nPracownicy:";

foreach ($pensje as $imie => $pensja) {
    echo "\n" . $imie . ": " . $pensja . "zł";
}

//2
$max_pensja = max($pensje);

foreach ($pensje as $imie => $pensja) {
    if ($pensja === $max_pensja) {
        echo "\n\nPracownik z największą pensją: " . $imie;
        break;
    }
}

//3
$pracownicy = array_keys($pensje);
$ilosc_pracownicy = count($pracownicy);

echo "\n\nCo drugi pracownik: ";
for ($i = 0; $i <= $ilosc_pracownicy; $i += 2) {
    echo "\n" . $pracownicy[$i];
}

//Zadanie 4
echo "\n\nZadanie 4 ----------------------------";

$liczby = [3, 8, 12, 5, 20, 7, 14]; 
//$liczby = [3, 8, 10, 5, 0, 7, 9];
echo "\nTablica liczby: ";
foreach ($liczby as $liczba) {
    echo $liczba . ", ";
}

foreach ($liczby as $index => $liczba) {
    if ($liczba > 10) {
        echo "\nPierwsza w tablicy liczba większa niż 10: " . $liczba . ", o indeksie: " . $index;
        break;
    }
    
    if ( ($index === ( count($liczby)-1 )) && ($liczba <= 10) ){
        echo "\nBrak liczby większej niż 10 w tablicy.";
    }
}