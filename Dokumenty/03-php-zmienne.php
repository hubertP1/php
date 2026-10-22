<?php
// #region wstęp
/*  Cele lekcji
	Poznanie zmiennych i typów danych w PHP. Nauka tworzenia i używania
	zmiennych do przechowywania różnych wartości: tekst, liczba, prawda/fałsz.
	Zrozumienie, jak zmienne pomagają w budowie aplikacji szkolnej.
*/

/*  Co będziesz umieć po tej lekcji?
	- Tworzyć zmienne w PHP
	- Przechowywać tekst, liczby i wartości logiczne
	- Rozpoznawać typy danych
	- Wykorzystywać zmienne w prostych operacjach
*/
// #endregion


// #region informacje
/*  Ogólne informacje
	Zmienne pozwalają przechowywać dane w programie. Dzięki nim można
	zapisywać informacje o uczniach, ocenach, klasach i innych elementach
	systemu szkolnego.

	Przykłady:
	- zmienna - miejsce na dane w programie
	- typ danych - rodzaj przechowywanej wartości (tekst, liczba, prawda/fałsz)
*/

/*  Zmienne
	Zmienna to "pudełko" na dane. Każda zmienna ma nazwę i wartość.
	W PHP zmienne zaczynają się od znaku $.

	Przykład:
	$uczen = "Jan Kowalski";
*/

/*  Typy danych
	Typ danych określa, jaki rodzaj wartości przechowuje zmienna.
	Najczęściej używane typy: tekst (string), liczba (int, float),
	prawda/fałsz (bool).

	Przykład:
	$ocena = 5; // liczba
	$czy_obecny = true; // prawda/fałsz
*/
// #endregion


// #region przydatne funkcje / składnia
// #region Tworzenie zmiennej
/*  Opis
	Zmienną tworzy się przez podanie jej nazwy (z $) i przypisanie wartości.
*/

/*  Składnia
	$nazwa_zmiennej = wartosc;
*/

/*  Przykład:
	$klasa = "1A"; // klasa ucznia
	$liczba_uczniow = 25; // liczba uczniów w klasie
	$czy_aktywny = false; // czy klasa jest aktywna
	// Wynik: zmienne przechowują dane o klasie
*/

/*  Zadanie:
	Utwórz zmienne: $nauczyciel (tekst), $sala (liczba), $czy_zajeta (prawda/fałsz)
*/
// #endregion

// #region Wyświetlanie zmiennej
/*  Opis
	Do pokazania wartości zmiennej używa się funkcji echo.
*/

/*  Składnia
	echo $nazwa_zmiennej;
*/

/*  Przykład:
	$uczen = "Anna Nowak";
	echo $uczen; // Wyświetli: Anna Nowak
	// Wynik: na stronie pojawi się imię i nazwisko ucznia
*/

/*  Zadanie:
	Wyświetl wartość zmiennej $klasa na stronie.
*/
// #endregion
// #endregion


// #region Przykłady
// #region Przykład 1: Dane ucznia
/*  Opis
	Przechowywanie danych ucznia w zmiennych.
*/

/*  Składnia
	$uczen = "Jan Kowalski";
	$wiek = 16;
	$czy_obecny = true;
*/

/*  Przykład:
	$uczen = "Jan Kowalski";
	$wiek = 16;
	$czy_obecny = true;
	echo $uczen;
	echo $wiek;
	echo $czy_obecny;
	// Wynik: Jan Kowalski 16 1
*/

/*  Zadanie:
	Utwórz zmienne dla nauczyciela: $nauczyciel, $przedmiot, $czy_na_lekcji
*/
// #endregion

// #region Przykład 2: Dane klasy
/*  Opis
	Przechowywanie informacji o klasie.
*/

/*  Składnia
	$klasa = "2B";
	$liczba_uczniow = 28;
	$czy_aktywny = false;
*/

/*  Przykład:
	$klasa = "2B";
	$liczba_uczniow = 28;
	$czy_aktywny = false;
	echo $klasa;
	echo $liczba_uczniow;
	echo $czy_aktywny;
	// Wynik: 2B 28
*/

/*  Zadanie:
	Utwórz zmienne dla sali: $sala, $typ_tablicy, $czy_zajeta
*/
// #endregion
// #endregion


// #region zadania
/*  [ŁATWE] Dane ucznia
	Utwórz zmienne: $uczen (tekst), $wiek (liczba), $czy_obecny (prawda/fałsz)
*/

/*  [ŚREDNIE] Dane nauczyciela
	Utwórz zmienne: $nauczyciel (tekst), $przedmiot (tekst), $czy_na_lekcji (bool)
*/

/*  [TRUDNE] Dane sali
	Utwórz zmienne: $sala (liczba), $typ_tablicy (tekst), $czy_zajeta (bool)
*/

/*  [EXPERT] Zmienna z wynikiem obliczenia
	Utwórz zmienną $srednia_ocen, która oblicza średnią z trzech ocen:
	$ocena1 = 4, $ocena2 = 5, $ocena3 = 3
	Wyświetl wynik na stronie.
*/
// #endregion


// #region podsumowanie
/*  Kluczowe wnioski
	- Zmienne przechowują dane w programie
	- Typy danych: tekst, liczba, prawda/fałsz
	- Zmienna zaczyna się od $
	- Można wyświetlać zmienne na stronie
*/

/*  Co dalej?
	Ćwicz tworzenie zmiennych i wyświetlanie ich wartości.
*/
// #endregion
