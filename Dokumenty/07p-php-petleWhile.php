<?php

// #region Pętla while z licznikiem
echo '<h2>Pętla while z licznikiem</h2>';

// Przykład 1: pętla while z licznikiem
// Pętla wyświetla liczby od 1 do 5, każda w osobnej linii.

// Licznik startowy - pierwsza wartość, od której zaczynamy
$i = 1;

// Pętla wykona się, dopóki $i jest mniejsze lub równe 5
while ($i <= 5) {
    // Wyświetlenie wartości licznika i znacznika nowej linii w HTML
    echo "Liczba: $i<br />";
    // Zwiększenie licznika o 1 - bez tego pętla byłaby nieskończona
    $i++;
}
// Oczekiwany wynik:
// Liczba: 1
// Liczba: 2
// Liczba: 3
// Liczba: 4
// Liczba: 5

echo '<br /><br />';
// #endregion


// #region Pętla while z krokiem większym niż 1
echo '<h2>Pętla while z krokiem większym niż 1</h2>';

// Przykład 2: pętla while z krokiem większym niż 1
// Pętla wyświetla wielokrotności liczby 3 od 3 do 15.


// Start licznika - pierwsza wielokrotność liczby 3
$krok = 3;
$wielokrotnosc = $krok;

// Pętla działa, dopóki licznik nie przekroczy 15
while ($wielokrotnosc <= 15) {
    echo "Wielokrotność $krok: $wielokrotnosc<br />";
    // Zwiększenie licznika o 3 - kolejna wielokrotność
    $wielokrotnosc += $krok;
}
// Oczekiwany wynik: liczby 3, 6, 9, 12 i 15, każda w osobnej linii

echo '<br /><br />';
// #endregion


// #region Pętla do-while z odliczaniem
echo '<h2>Pętla do-while z odliczaniem</h2>';

// Przykład 3: pętla do-while z odliczaniem
// Blok wykonuje się co najmniej raz, warunek jest sprawdzany na końcu.


// Licznik odliczania startuje od 10
$licznik = 10;

do {
    // Wyświetlenie aktualnej wartości licznika
    echo "Odliczanie: $licznik<br />";
    // Zmniejszenie licznika o 1 w każdym obiegu
    $licznik--;
// Warunek sprawdzany po wykonaniu bloku - pętla kończy się, gdy licznik wyniesie 0
} while ($licznik > 0);

// Komunikat wyświetlany po zakończeniu pętli
echo "Start!<br />";
// Oczekiwany wynik: liczby od 10 do 1, a potem komunikat Start!

echo '<br /><br />';
// #endregion


// #region Pętla do-while z tabliczką mnożenia przez 3
echo '<h2>Pętla do-while z tabliczką mnożenia przez 3</h2>';

// Przykład 4: pętla do-while z tabliczką mnożenia przez 3
// Mnożnik i licznik zaczynają się od 1.


// Licznik tabliczki mnożenia
$i = 1;

do {
    // Wyświetlenie działania i wyniku mnożenia przez 3
    echo "3 x $i = " . (3 * $i) . "<br />";
    // Zwiększenie licznika o 1
    $i++;
} while ($i <= 5);
// Oczekiwany wynik: 3 x 1 = 3, 3 x 2 = 6, 3 x 3 = 9, 3 x 4 = 12, 3 x 5 = 15
// #endregion
