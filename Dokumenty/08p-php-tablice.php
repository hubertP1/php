<style type="text/css">
	div {
		height: 50px;
		overflow: hidden;
	}
	div:hover {
		height: auto;
	}
	div:hover + div {
		margin-top: 50px;
	}
</style>
<?php

// #region tablice zwykłe
// #region definicja
echo '<div>';
echo '<h3>Tablica zwykła pusta</h3>';
// definicja pustej tablicy
$tablicaZwyklaPusta = []; // dlugość: 0
print_r($tablicaZwyklaPusta);
/* wynik
	Array ( )
*/
echo '</div>';

// dodanie elementu na ostatniej pozycji
echo '<div><h3>Tablica zwykła po dodaniu elementu 10</h3>';
$tablicaZwyklaPusta[] = 10; // element dodany na indeksie `0`
print_r($tablicaZwyklaPusta);
/* wynik
	Array ( [0] => 10 )
*/
echo '</div>';

//  element dodany na pozycji `5`
echo '<div><h3>Tablica zwykła po dodaniu elementu 20 na pozycji 5</h3>';
$tablicaZwyklaPusta[5] = 20;
print_r($tablicaZwyklaPusta);
/* wynik
	Array ( [0] => 10 [5] => 20 )
*/
echo '</div>';

// definicja tablicy wypełnionej
echo '<div><h3>Tablica zwykła wypełniona</h3>';
$tablicaZwyklaWypelniona = [5, 78, 23, 9];
print_r($tablicaZwyklaWypelniona);
/* wynik
	Array ( [0] => 5 [1] => 78 [2] => 23 [3] => 9 )
*/
echo '</div>';
// #endregion

// #region iteracja po tablicy
// zliczamy liczbę elementów w tablicy
echo '<div><h3>Iteracja po tablicy zwykłej wypełnionej</h3>';
$iloscElementow = count($tablicaZwyklaWypelniona);
for ($i = 0; $i < $iloscElementow; $i++) {
    echo $tablicaZwyklaWypelniona[$i] . "\n";
}
/* wynik
	5
	78
	23
	9
*/
echo '</div>';

echo '<div><h3>Iteracja po tablicy zwykłej wypełnionej (foreach)</h3>';
foreach ($tablicaZwyklaWypelniona as $element) {
    echo $element . "\n";
}
/* wynik
	5
	78
	23
	9
*/
echo '</div>';
// #endregion
// #endregion


// #region definicja tablicy asocjacyjnej
echo '<div><h3>Tablice asocjacyjne</h3>';
// #region definicja tablicy asocjacyjnej
$tablicaAsocjacyjnaWypelniona = [
	'klucz1' => 'wartość 1',
	'klucz2' => 'wartość 2'
];
print_r($tablicaAsocjacyjnaWypelniona);
/* wynik
	Array ( [klucz1] => wartość 1 [klucz2] => wartość 2 )
*/
echo '</div>';

echo '<div><h3>Tablica asocjacyjna pusta</h3>';
$tablicaAsocjacyjnaPusta = [];
print_r($tablicaAsocjacyjnaPusta);
/* wynik
	Array ( )
*/
echo '</div>';

// dodanie elementu do pustej tablicy asocjacyjnej
echo '<div><h3>Dodanie elementów do pustej tablicy asocjacyjnej</h3>';
$tablicaAsocjacyjnaPusta['klucz1'] = 'wartość 1';
$tablicaAsocjacyjnaPusta['klucz2'] = 'wartość 2';
print_r($tablicaAsocjacyjnaPusta);
/* wynik
	Array ( [klucz1] => wartość 1 [klucz2] => wartość 2 )
*/
echo '</div>';
// #endregion

// #region iteracja po tablicy asocjacyjnej
echo '<div><h3>Iteracja po tablicy asocjacyjnej</h3>';
foreach ($tablicaAsocjacyjnaWypelniona as $klucz => $wartosc) {
    echo "$klucz to $wartosc\n";
}
/* wynik
	klucz1 to wartość 1
	klucz2 to wartość 2
*/
echo '</div>';
// #endregion
// #endregion


// #region array_map
echo '<div><h3>Przykład użycia array_map</h3>';
$tablica = [1, 2, 3, 4];
$tablicaPodwojona = array_map(function($element) {
    return $element * 2;
}, $tablica);
print_r($tablicaPodwojona);
/* wynik
	Array ( [0] => 2 [1] => 4 [2] => 6 [3] => 8 )
*/
echo '</div>';
// #endregion


// #region array_filter
echo '<div><h3>Przykład użycia array_filter</h3>';
$tablica = [1, 2, 3, 4];
$tablicaParzyste = array_filter($tablica, function($element) {
	// return true // element zostanie w tablicy
	// return false // element zostanie odfiltrowany
    return $element % 2 === 0;
});
print_r($tablicaParzyste);
/* wynik
	Array ( [1] => 2 [3] => 4 )
*/
echo '</div>';
// #endregion
