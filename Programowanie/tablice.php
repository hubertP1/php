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

$tablica = [1, 5, 34, 2, 7, 89, 1, 35, 10];
echo "\nTablica: ";
foreach ($tablica as $liczba) {
    echo $liczba . ", ";
}

function usunNieparzyste(array $tablica): array {
    // array_filter zachowuje tylko te elementy, dla których funkcja zwraca true
    return array_filter($tablica, function($liczba) {
        return $liczba % 2 === 0;
    });
}

$tablica_parzysta = usunNieparzyste($tablica);
echo "\nTablica z liczbami parzystymi: ";
foreach ($tablica_parzysta as $liczba) {
    echo $liczba . ", ";
}

//Zadanie 8
echo "\n\nZadanie 8 ---------------";

$samochody = [
    "audi" => ["model" => "R8", "rok produkcji" => 2010, "kolor" => "czarny"],
    "bmw" => ["model" => "M4", "rok produkcji" => 2020, "kolor" => "biały"],
    "ford" => ["model" => "mustang", "rok produkcji" => 2015, "kolor" => "czerwony"]    
];
$samochod = $samochody['bmw'];

echo "\nWłaściwości dla samochodu bmw:\n";
foreach (array_keys($samochod) as $wlasciwosc) {
    echo $wlasciwosc . " -> " . $samochod[$wlasciwosc] . "\n";
}

//Zadanie 9
echo "\n\nZadanie 9 ---------------";

$liczby = [5, 8, 2, 14, 68];
echo "\nTablica liczby: ";
foreach ($liczby as $liczba) {
    echo $liczba . ", ";
}

foreach (array_keys($liczby) as $klucz) {
    $liczby[$klucz] = $liczby[$klucz] * 1.1;
}

echo "\nTablica liczby z liczbami powiększonymi o 10%: ";
foreach ($liczby as $liczba) {
    echo $liczba . ", ";
}

//Zadanie 10
echo "\n\nZadanie 10 ---------------";

echo "\nTablica liczby_calkowite: ";
$liczby_calkowite = [3, 67, 2, 4, 15, 7, 34, 1, 8, 9];
foreach ($liczby_calkowite as $liczba) {
    echo $liczba . ", ";
}

$suma = array_sum($liczby_calkowite);

echo "\nSuma liczb w tablicy: " . $suma;

//Zadanie 11
echo "\n\nZadanie 11 ---------------";
