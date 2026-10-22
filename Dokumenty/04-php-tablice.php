<?php

#region Tablice w PHP
#region informacje
/* Tablice są jednym z najważniejszych typów danych w PHP.
 * Pozwalają przechowywać wiele wartości w jednej zmiennej.
 * Każdy element tablicy może być dostępny za pomocą indeksu (dla tablic indeksowanych) lub klucza (dla tablic asocjacyjnych).
 * W tablicach indeksowanych klucze są liczbami całkowitymi zaczynającymi się od 0.
 * W tablicach asocjacyjnych klucze mogą być stringami.
 * Tablice w każdej komórce mogą przechowywać różne typy danych, w tym inne tablice (tablice wielowymiarowe).
 * Definiuje się za pomocą nawiasów kwadratowych [] lub funkcji array().
 */
#endregion


#region Tablica indeksowana
$owoce = [
	"jabłko",
	"gruszka",
	"śliwka",
	"wiśnia"
];
echo "Pierwszy owoc: " . $owoce[0] . "<br />"; // jabłko
echo "Wszystkie owoce: ";
print_r($owoce);
#endregion


#region Tablica asocjacyjna
$osoba = [
	"imie" => "Jan",
	"nazwisko" => "Kowalski",
	"wiek" => 25,
	"miasto" => "Warszawa"
];
echo "Imię: " . $osoba["imie"] . "<br />";
echo "Wiek: " . $osoba["wiek"] . " lat<br />";
#endregion


#region Tablica wielowymiarowa
$studenci = [
	["imie" => "Anna", "ocena" => 5],
	["imie" => "Piotr", "ocena" => 4],
	["imie" => "Maria", "ocena" => 5]
];
echo "Pierwszy student: " . $studenci[0]["imie"] . ", ocena: " . $studenci[0]["ocena"] . "<br />";
#endregion


#region count()
/* count( - zwraca liczbę elementów w tablicy
	array $tablica
): int
https://www.php.net/manual/en/function.count.php
*/
$liczby = [5, 2, 8, 1, 9, 3];
echo "Liczba elementów: " . count($liczby) . "<br />";	//	6 elementów
#endregion


#region array_sum()
/* array_sum( - zwraca sumę wartości w tablicy
	array $tablica
): float|int
https://www.php.net/manual/en/function.array-sum.php
*/
echo "Suma: " . array_sum($liczby) . "<br />";
/*	konwersja w locie
	'234asdasdf'	->	234
	'asdfasd343'	->	NaN
*/
#endregion


#region sort()
/* sort( - sortuje tablicę rosnąco
	array &$tablica,
	int $tryb = SORT_REGULAR
): bool
https://www.php.net/manual/en/function.sort.php
*/
echo "Przed sortowaniem: ";
print_r($liczby);
sort($liczby);
echo "Po sortowaniu: ";
print_r($liczby);
#endregion


#region in_array()
/* in_array( - sprawdza czy wartość istnieje w tablicy
	mixed $wartosc,
	array $tablica,
	bool $identycznosc = false
): bool
https://www.php.net/manual/en/function.in-array.php
*/
$jezyki = ["PHP", "JavaScript", "Python", "Java"];
$szukanyJezyk = "Python";
if (in_array($szukanyJezyk, $jezyki)) {
	echo "$szukanyJezyk jest w tablicy języków.<br />";
} else {
	echo "$szukanyJezyk nie ma w tablicy języków.<br />";
}
#endregion


#region array_merge()
/* array_merge( - łączy dwie lub więcej tablic
	array ...$tablice
): array
https://www.php.net/manual/en/function.array-merge.php
*/
$tablica1 = [1, 2, 3];
$tablica2 = [4, 5, 6];
$polaczona = array_merge($tablica1, $tablica2);
echo "Połączona tablica: ";
print_r($polaczona);
#endregion


#region array_map()
/* function array_map(
	?callable $callback,
	array $array,
	array ...$arrays	//	kolejne tablice
): array
https://www.php.net/manual/en/function.array-map.php
*/
$liczby = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
function pomnozLiczbe($liczba, $mnożnik = 2): int {
	return $liczba * $mnoznik;
};
$pomnozone = array_map(
	'pomnozLiczbe',
	$liczby
);
echo "Liczby pomnożone przez 2: ";
print_r($pomnozone);

function utworzLi($username) {
	return '<li>' . $username . '</li>';
}
$uzytkownicy = ['Ala', 'Makota', 'Zenek', 'Ziuta'];
$pomnozone = array_map(
	'pomnozLiczbe',
	$liczby
);
/* wynik:
[
	'<li>Ala</li>',
	'<li>Makota</li>',
	'<li>Zenek</li>',
	'<li>Ziuta</li>'
]
*/
#endregion


#region array_filter()
/* array_filter( - filtruje elementy tablicy na podstawie funkcji zwrotnej
	array $tablica,
	callable|null $callback = null,
	int $flag = 0
): array
https://www.php.net/manual/en/function.array-filter.php
*/
$liczbyMieszane = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$parzyste = array_filter($liczbyMieszane, function($liczba) {
	return $liczba % 2 === 0;
});
echo "Liczby parzyste: ";
print_r($parzyste);
#endregion


#region Pętla foreach
// tablica indeksowana
foreach ($owoce as $owoc) {
	echo "$owoc<br />";
}

foreach ($owoce as $klucz => $wartosc) {
	echo "$klucz: $wartosc<br />";
	/* wynik:
	'0: gruszka<br />'
	'1: jabłko<br />'
	'2: pomelo<br />'
	'3: kiwi<br />'
	...
	*/
}


// tablica asocjacyjna
foreach ($osoba as $klucz => $wartosc) {
	echo "$klucz: $wartosc<br />";
}
#endregion
#endregion


#region Zadania
#region ZADANIE 1 [ŁATWE]: Średnia z liczb
/* Utwórz tablicę z 5 liczbami i oblicz ich średnią.
*/
#endregion

#region ZADANIE 2 [ŁATWE]: Wartość całkowita produktu
/* Utwórz tablicę asocjacyjną reprezentującą produkt (nazwa, cena, ilość) i wyświetl wartość całkowitą (cena * ilość).
*/
#endregion

#region ZADANIE 3 [ŁATWE]: Sortowanie imion
/* Utwórz tablicę z imionami i posortuj ją alfabetycznie.
*/
#endregion

#region ZADANIE 4 [ŁATWE]: Sprawdzanie istnienia elementu
/* Sprawdź czy element 'PHP' istnieje w tablicy języków programowania używając in_array().
*/
#endregion

#region ZADANIE 5 [ŁATWE]: Łączenie tablic
/* Połącz dwie tablice za pomocą array_merge() i wyświetl wynik.
*/
#endregion

#region ZADANIE 6 [ŚREDNIE]: Tablica wielowymiarowa - Oceny studentów
/* Utwórz tablicę wielowymiarową przechowującą imiona studentów oraz ich oceny z trzech przedmiotów.
* Następnie oblicz średnią ocenę dla każdego studenta i wyświetl ją.
*/
#endregion

#region ZADANIE 7 [ŚREDNIE]: Filtrowanie tablicy
/* Utwórz tablicę z różnymi liczbami całkowitymi.
* Następnie użyj funkcji array_filter(), aby utworzyć nową tablicę zawierającą tylko liczby parzyste.
* Wyświetl wynikową tablicę.
*/
#endregion

#region ZADANIE 8 [ŚREDNIE]: Iteracja przez tablicę asocjacyjną
/* Utwórz tablicę asocjacyjną reprezentującą samochód (marka, model, rok produkcji, kolor).
* Następnie użyj pętli foreach, aby wyświetlić wszystkie właściwości samochodu w formacie "klucz: wartość".
*/
#endregion

#region ZADANIE 9 [ŚREDNIE]: Modyfikacja tablicy
/* Utwórz tablicę z 5 liczbami całkowitymi.
* Następnie użyj pętli foreach, aby zwiększyć każdą liczbę o 10%.
* Wyświetl zmodyfikowaną tablicę.
*/
#endregion

#region ZADANIE 10 [ŚREDNIE]: Sumowanie wartości w tablicy
/* Utwórz tablicę z 10 liczbami całkowitymi.
* Następnie użyj funkcji array_sum(), aby obliczyć i wyświetlić sumę wszystkich liczb w tablicy.
*/
#endregion

#region ZADANIE 11 [EXPERT]: Tabela krzyżowa (Pivot Table)
/* Napisz funkcję tabelaKrzyzowa(array $dane, string $kluczWiersza, string $kluczKolumny, string $kluczWartosci): array,
* która na podstawie tablicy danych tworzy tablicę krzyżową (pivot table).
* Np. z danych uczniów z ocenami z przedmiotów, stwórz tabelę: wiersze = uczniowie, kolumny = przedmioty, wartości = średnia ocen.
*/
#endregion
#endregion
