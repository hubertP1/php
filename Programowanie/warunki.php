<?php
// Zadanie 1
echo "Zadanie 1 --------------------------\n";
$liczba = 2;
if ($liczba == 0) {
    echo "Liczba " . $liczba . " jest równa 0";
} elseif ($liczba > 1) {
    echo "Liczba " . $liczba . " jest dodatnia";
} else {
    echo "Liczba " . $liczba . " jest ujemna";
}

// Zadanie 2
echo "\n\nZadanie 2 --------------------------";
$ocena = 6;
echo "\n" . $ocena . " - ";
switch ($ocena) {
    case 1:
        echo "Ocena Niedostateczna";
        break;
    case 2:
        echo "Ocena Dopuszczająca";
        break;
    case 3:
        echo "Ocena Dostateczna";
        break;
    case 4:
        echo "Dobra";
        break;
    case 5:
        echo "Ocena Bardzo dobra";
        break;
    case 6:
        echo "Ocena Celująca";
}


// Zadanie 3
echo "\n\nZadanie 3 --------------------------";
$wiek = 19;
$posiadanie_karty = true;

$czyWejscie = ($wiek < 18 || $wiek >= 65) || ($posiadanie_karty == true);

echo "\nZezwolenie wejścia: " . $czyWejscie;

// Zadanie 4
echo "\n\nZadanie 4 --------------------------";
$punkty = 75;

echo "\n" . $punkty . " punktów - ";

if ($punkty > 0 && $punkty <= 49) {
    echo "Ocena niedostateczna";
} elseif ($punkty >= 50 && $punkty <= 59) {
    echo "Ocena Dopuszczająca";
} elseif ($punkty >= 60 && $punkty <= 74) {
    echo "Ocena Dostateczna";
} elseif ($punkty >= 75 && $punkty <= 89) {
    echo "Ocena Dobra";
} elseif ($punkty >= 90 && $punkty <= 100) {
    echo "Ocena celująca";
}


// Zadanie 5
echo "\n\nZadanie 5 --------------------------";

// Zadanie 1
echo "Zadanie 1 --------------------------";

