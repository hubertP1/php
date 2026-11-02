<?php

// Pętla for - wypisanie liczb od 1 do 10


// Inicjalizacja: $i = 1
// Warunek: $i <= 10
// Krok: $i++
for ($i = 1; $i <= 10; $i++) {
    // Ciało pętli wykonuje się dla każdej wartości $i
    echo $i . '<br />' . PHP_EOL;
}

// Wynik:
// 1
// 2
// ...
// 10


// Pętla for - liczby parzyste od 2 do 10

// Krok $i += 2 zwiększa licznik o 2 przy każdej iteracji
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . '<br />' . PHP_EOL;
}

// Wynik:
// 2
// 4
// 6
// 8
// 10


// Pętla foreach - tablica indeksowana

// Tablica z elementami o indeksach 0, 1, 2
$owoce = ["jabłko", "gruszka", "śliwka"];

// Zmienna $owoc przyjmuje kolejno wartości z tablicy $owoce
foreach ($owoce as $owoc) {
    echo $owoc . '<br />' . PHP_EOL;
}

// Wynik:
// jabłko
// gruszka
// śliwka


// Pętla foreach - tablica asocjacyjna

// Tablica z kluczami tekstowymi
$ceny = ["jabłko" => 3, "gruszka" => 5];

// Klucz trafia do $nazwa, a wartość do $cena
foreach ($ceny as $nazwa => $cena) {
    echo "$nazwa kosztuje $cena zł" . PHP_EOL;
}

// Wynik:
// jabłko kosztuje 3 zł
// gruszka kosztuje 5 zł


// Instrukcje break i continue

// Pętla for z continue (pominięcie 3) i break (przerwanie przy 5)
for ($i = 1; $i <= 5; $i++) {
    // continue pomija resztę ciała i przechodzi do następnej wartości
    if ($i === 3) {
        continue;
    }

    // break przerywa całą pętlę
    if ($i === 5) {
        break;
    }

    echo $i . '<br />' . PHP_EOL;
}

// Wynik:
// 1
// 2
// 4


// Funkcje count() i array_keys()

$produkty = ["chleb" => 4.5, "mleko" => 3.2];
$produkty2 = ['chleb', 'mleko']; // [0 => 'chleb', 1: 'mleko']

// count() zwraca liczbę elementów tablicy
echo count($produkty) . '<br />' . PHP_EOL;

// array_keys() zwraca tablicę kluczy: ["chleb", "mleko"]
$klucze = array_keys($produkty);
// array_keys() zwraca tablicę kluczy: [0, 1]
$klucze = array_keys($produkty2);
echo $klucze[1] . '<br />' . PHP_EOL;

// Wynik:
// 2
// mleko


// Tabliczka mnożenia

// Dane wejściowe: liczba $n = 7
$n = 7;

// Wypisuje tabliczkę mnożenia dla $n od 1 do 10
for ($i = 1; $i <= 10; $i++) {
    echo "$n x $i = " . ($n * $i) . '<br />' . PHP_EOL;
}

// Wynik:
// 7 x 1 = 7
// 7 x 2 = 14
// ...
// 7 x 10 = 70


// Średnia ocen

// Dane wejściowe: tablica ocen
$oceny = [4, 2, 5, 3, 1, 5];
$suma = 0;
$niedostateczne = 0;

// Dla każdej oceny dodaj ją do sumy
foreach ($oceny as $ocena) {
    $suma += $ocena;

    // Licz oceny poniżej 2
    if ($ocena < 2) {
        $niedostateczne++;
    }
}

// Średnia to suma podzielona przez liczbę ocen
$srednia = $suma / count($oceny);

echo "Średnia: " . round($srednia, 2) . '<br />' . PHP_EOL;
echo "Liczba ocen niedostatecznych: $niedostateczne" . '<br />' . PHP_EOL;

// Wynik:
// Średnia: 3.33
// Liczba ocen niedostatecznych: 1


// Lista produktów

// Dane wejściowe: tablica asocjacyjna z cenami
$produkty = [
    "chleb" => 4.5,
    "mleko" => 3.2,
    "masło" => 7.9,
];

$suma = 0;

// Wypisz każdy produkt i dodaj jego cenę do sumy
foreach ($produkty as $nazwa => $cena) {
    echo "$nazwa: $cena zł" . '<br />' . PHP_EOL;
    $suma += $cena;
}

echo "Suma: $suma zł" . '<br />' . PHP_EOL;

// Pobierz same nazwy produktów
$klucze = array_keys($produkty);
$kluczeIlosc = count($klucze);

// Krok 2 - wypisz co drugi produkt (indeksy 0, 2, ...)
for ($i = 0; $i < $kluczeIlosc; $i += 2) {
    echo "Co drugi produkt: " . $klucze[$i] . '<br />' . PHP_EOL;
}

// Wynik:
// chleb: 4.5 zł
// mleko: 3.2 zł
// masło: 7.9 zł
// Suma: 15.6 zł
// Co drugi produkt: chleb
// Co drugi produkt: masło
