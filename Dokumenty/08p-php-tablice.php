<?php

// #region tablice zwykłe
// #region definicja
// definicja pustej tablicy
$tablicaZwyklaPusta = []; // dlugość: 0
// print_r($tablicaZwyklaPusta) // wyświetli: Array ( )

// dodanie elementu na ostatniej pozycji
$tablicaZwyklaPusta[] = 10; // element dodany na indeksie `0`
// print_r($tablicaZwyklaPusta) // wyświetli: Array ( [0] => 10 )
$tablicaZwyklaPusta[5] = 20; //  element dodany na indeksie `5`
// print_r($tablicaZwyklaPusta) // wyświetli: Array ( [0] => 10 [5] => 20 )

// definicja tablicy wypełnionej
$tablicaZwyklaWypelniona = [5, 78, 23, 9];
// #endregion

// #region iteracja po tablicy
$iloscElementow = count($tablicaZwyklaWypelniona); // liczba elementów w tablicy
for ($i = 0; $i < $iloscElementow; $i++) {
    echo $tablicaZwyklaWypelniona[$i] . "\n";
}
/* wynik
5
78
23
9
*/

foreach ($tablicaZwyklaWypelniona as $element) {
    echo $element . "\n";
}
/* wynik
5
78
23
9
*/
// #endregion
// #endregion


// #region tablice asocjacyjna
// #region definicja tablicy asocjacyjnej
$tablicaAsocjacyjnaWypelniona = [
	'klucz1' => 'wartość 1',
	'klucz2' => 'wartość 2'
];

$tablicaAsocjacyjnaPusta = [];

// dodanie elementu do pustej tablicy asocjacyjnej
$tablicaAsocjacyjnaPusta['klucz1'] = 'wartość 1';
$tablicaAsocjacyjnaPusta['klucz2'] = 'wartość 2';
// print_r($tablicaAsocjacyjnaPusta) // wyświetli: Array ( [klucz1] => wartość 1 [klucz2] => wartość 2 )
// #endregion

// #region iteracja po tablicy asocjacyjnej
foreach ($tablicaAsocjacyjnaWypelniona as $klucz => $wartosc) {
    echo "$klucz to $wartosc\n";
}
/* wynik
klucz1 to wartość 1
klucz2 to wartość 2
*/
// #endregion
// #endregion
