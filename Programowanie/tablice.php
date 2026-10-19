<?php
//Zadanie 1
echo "Zadanie 1 ---------------";

$liczby = [1, 2, 3, 4, 5];
$suma = 0;
$ilosc = count($liczby);

echo "\nLiczby: ";
foreach ($liczby as $liczba) {
    echo $liczba . ", ";
    $suma = $suma + $liczba;
}

$srednia = $suma / $ilosc;
echo "\nSrednia: " . $srednia;

//Zadanie 2
echo "\n\nZadanie 2 ---------------";
$owoce = [
	"jablko" => ["cena" => 2, "ilość" => 20],
	"pomidor" => ["cena" => 3, "ilość" => 15],
	"brzoskwinia" => ["cena" => 4, "ilość" => 10]
];
$wartosc_calkowita = $owoce["jablko"]["cena"] * $owoce["jablko"]["ilość"];
echo "\nWartośc całkowita: " . $wartosc_calkowita;

//Zadanie 3
echo "\n\nZadanie 3 ---------------";
$imiona = ["Hubert", "Piotr", "Kuba", "Stanisław", "Andrzej"];
echo "\nImiona: ";
foreach ($imiona as $imie) {
    echo $imie . ", ";
}

sort($imiona);
echo "\nImiona posortowane alfabetycznie: ";
foreach ($imiona as $imie) {
    echo $imie . ", ";
}

//Zadanie 4
echo "\n\nZadanie 4 ---------------";
$jezyki_programowania = ["python", "c++", "assembly"];
$szukany_jezyk = "php";

if (in_array($szukany_jezyk, $jezyki_programowania)) {
    echo "\nElement '$szukany_jezyk' znajduje się w tablicy.";
} else {
    echo "\nElement '$szukany_jezyk' NIE znajduje się w tablicy.";
}

//Zadanie 5
echo "\n\nZadanie 5 ---------------";
echo "\nLista imiona: ";
foreach ($imiona as $imie) {
    echo $imie . ", ";
}

echo "\nLista języki_programowania: ";
foreach ($jezyki_programowania as $jezyk) {
    echo $jezyk . ", ";
}

$polaczona_lista = array_merge($imiona, $jezyki_programowania);
echo "\nPołączona lista: ";
foreach ($polaczona_lista as $wartosc) {
    echo $wartosc . ", ";
}

//Zadanie 6
echo "\n\nZadanie 6 ---------------";
$studenci = [
	"Anna" => ["oceny" => ["matematyka" => 5, "polski" => 3, "angielski" => 6, "fizyka" => 4, "chemia" => 5]],
    "Piotr" => ["oceny" => ["matematyka" => 3, "polski" => 2, "angielski" => 4, "fizyka" => 5, "chemia" => 2]],
    "Michał" => ["oceny" => ["matematyka" => 4, "polski" => 5, "angielski" => 5, "fizyka" => 6, "chemia" => 4]]

];

$ocena = $studenci["Anna"]["oceny"]["matematyka"];
echo "\nOcena Anny z matematyki: " .  $ocena;

//Zadanie 7
echo "\n\nZadanie 7 ---------------";
