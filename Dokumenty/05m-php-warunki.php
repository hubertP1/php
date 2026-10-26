<?php

#region informacje
// Instrukcje warunkowe w PHP pozwalają na wykonywanie różnych bloków kodu w zależności od spełnienia warunków
// PHP obsługuje: if, else, elseif, switch oraz operator trójargumentowy (ternary)
#endregion


#region if, else, elseif
// Podstawowa instrukcja warunkowa
$wiek = 18;

if ($wiek < 18) {
	echo "Jesteś niepełnoletni.\n";
} elseif ($wiek == 18) {
	echo "Właśnie osiągnąłeś pełnoletność!\n";
} else {
	echo "Jesteś pełnoletni.\n";
}
#endregion


#region operatory porównania
// == te same wartości (z konwersją typów)
5 == '5' // true

// === równość wartości i typu (identyczność) - bez konwersji typów
5 === '5' // false

// != różne wartości np. 5 != '5' jest false
5 == '4' // true

// !== nierówność wartości lub typu
5 !== '5' // true

// < mniejsze
4 < 5 // true

// > większe
5 > 4 // true

// <= mniejsze lub równe
6 <= 5 // true

// >= większe lub równe
5 >= 6 // true
#endregion


#region operatory logiczne
// && - logiczne AND
// || - logiczne OR
// ! - logiczne NOT

$czyZalogowany = true;
$czyPracownik = true;
$czyAdmin = false;

if ($czyZalogowany) {
	echo "Masz dostęp do panelu admina.\n";
	if (!$czyAdmin) {
		echo "Jesteś zalogowany, ale nie jesteś adminem.\n";
		if ($czyPracownik) {
			echo "Masz dostęp do panelu pracownika.\n";
		} else {
			echo "Masz dostęp do panelu użytkownika.\n";
		}
	} else {
		echo "Witaj, adminie!\n";
	}
} else {
	echo "Musisz się zalogować.\n";
}
#endregion


#region operator trójargumentowy (ternary)
// warunek ? wartość_jeśli_true : wartość_jeśli_false
$punkty = 75;
$ocena = ($punkty >= 50) ? "Zdał" : "Nie zdał";
echo "Wynik: $ocena\n";

// Skrócony operator null coalescing (??)
// zwraca pierwszą wartość, która nie jest null
$nazwa = null;
$domyslnaNazwa = $nazwa ?? "Gość";
echo "Nazwa użytkownika: $domyslnaNazwa\n";

// Operator Elvis (?:)
// zwraca pierwszą wartość, jeśli jest "truthy"
$imie = "";
$wyswietlaneImie = $imie ?: "Anonim";
echo "Imię: $wyswietlaneImie\n";
#endregion


#region switch
$dzien = 3;

switch ($dzien) {
	case 1:
		echo "Poniedziałek\n";
		break;
	case 2:
		echo "Wtorek\n";
		break;
	case 3:
		echo "Środa\n";
		break;
	case 4:
		echo "Czwartek\n";
		break;
	case 5:
		echo "Piątek\n";
		break;
	case 6:
	case 7:
		echo "Weekend!\n";
		break;
	default:
		echo "Nieprawidłowy dzień\n";
		break;
}
#endregion


#region match (PHP 8+)
// match jest podobny do switch, ale zwraca wartość i używa ścisłego porównania (===)
$statusKod = 200;

$statusTekst = match ($statusKod) {
	200, 201 => "Sukces",
	400 => "Błąd żądania",
	404 => "Nie znaleziono",
	500 => "Błąd serwera",
	default => "Nieznany status"
};

echo "Status: $statusTekst\n";
#endregion


#region zagnieżdżone warunki
$temperatura = 25;
$czyPada = false;

if ($temperatura > 20) {
	if ($czyPada) {
		echo "Jest ciepło, ale pada deszcz. Weź parasol!\n";
	} else {
		echo "Jest ciepło i słonecznie!\n";
	}
} else {
	echo "Jest chłodno.\n";
}
#endregion


#region funkcje
#region isset
/* isset( - sprawdza, czy zmienna jest zdefiniowana i nie jest NULL
	mixed $var,
	mixed ...$vars
): bool
https://www.php.net/manual/en/function.isset.php
*/
/* przykład użycia isset(): */
$zmiennaA = "wartość";
$zmiennaB = null;

echo "isset(\$zmiennaA): " . (isset($zmiennaA) ? "true" : "false") . "\n"; // true
echo "isset(\$zmiennaB): " . (isset($zmiennaB) ? "true" : "false") . "\n"; // false
echo "isset(\$nieistnieje): " . (isset($nieistnieje) ? "true" : "false") . "\n"; // false
#endregion


#region empty
/* empty( - sprawdza, czy zmienna jest pusta
	mixed $var
): bool
Puste wartości: "", 0, 0.0, "0", null, false, array(), oraz niezdefiniowane zmienne
https://www.php.net/manual/en/function.empty.php
*/
/* przykład użycia empty(): */
$pustaTablica = [];
$pustyString = "";
$zero = 0;
$pelnyString = "tekst";

echo "empty(\$pustaTablica): " . (empty($pustaTablica) ? "true" : "false") . "\n"; // true
echo "empty(\$pustyString): " . (empty($pustyString) ? "true" : "false") . "\n"; // true
echo "empty(\$zero): " . (empty($zero) ? "true" : "false") . "\n"; // true
echo "empty(\$pelnyString): " . (empty($pelnyString) ? "true" : "false") . "\n"; // false
#endregion
#endregion


#region zadania
/* zadanie 1 [ŁATWE]
Napisz skrypt, który sprawdzi, czy podana liczba jest dodatnia, ujemna czy równa zero.
Użyj instrukcji if, elseif, else.
*/

/* zadanie 2 [ŁATWE]
Napisz skrypt, który na podstawie oceny (1-6) wyświetli odpowiedni komentarz (niedostateczny, dopuszczający, dostateczny, dobry, bardzo dobry, celujący).
Użyj instrukcji switch.
*/

/* zadanie 3 [ŚREDNIE]
Napisz skrypt, który sprawdzi, czy użytkownik może uzyskać zniżkę.
Warunki: wiek < 18 LUB wiek >= 65 LUB posiada kartę stałego klienta.
Użyj operatorów logicznych.
*/

/* zadanie 4 [ŚREDNIE]
Napisz skrypt, który przypisze ocenę słowną na podstawie punktów (0-100):
- 0-49: niedostateczny
- 50-59: dopuszczający
- 60-74: dostateczny
- 75-89: dobry
- 90-100: bardzo dobry
Użyj operatora trójargumentowego lub match.
*/

/* zadanie 5 [TRUDNE]
Napisz skrypt, który sprawdzi, czy zmienna istnieje i nie jest pusta.
Użyj funkcji isset() i empty().
Wyświetl odpowiedni komunikat.
*/

/* zadanie 6 [EXPERT]
Napisz kalkulator dat: użytkownik podaje datę urodzenia (3 pola: dzień, miesiąc, rok), a program wyświetla:
wiek, znak zodiaku, dzień tygodnia urodzenia, ile dni do następnych urodzin.
Użyj match/switch i warunków zagnieżdżonych. Dodaj walidację daty (np. luty ma max 28/29 dni).
*/
#endregion
