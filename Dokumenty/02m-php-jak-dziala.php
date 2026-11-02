<?php
//	#region wstęp
/*	Cele lekcji
	Poznanie, jak działa PHP w praktyce: rola serwera, przeglądarki,
	podstawowe polecenia (echo), komentarze w kodzie. Zrozumienie
	procesu przetwarzania plików PHP i ich znaczenia w aplikacji webowej.
*/

/*	Co będziesz umieć po tej lekcji?
	- Wyjaśnić, jak działa PHP na serwerze i w przeglądarce
	- Używać polecenia echo do wyświetlania tekstu
	- Dodawać komentarze w kodzie PHP
	- Rozumieć, jak plik PHP jest przetwarzany przez serwer
*/
//	#endregion


//	#region informacje
/*	Ogólne informacje
	PHP to język, który działa po stronie serwera. Kod PHP jest
	przetwarzany przez serwer, a wynik (najczęściej HTML) trafia
	do przeglądarki użytkownika.

	Przykłady:
	- echo - wyświetlanie tekstu na stronie
	- komentarz - opis działania kodu, niewidoczny dla użytkownika
*/

/*	Serwer
	Serwer to komputer, który przetwarza pliki PHP i wysyła wynik
	do przeglądarki. Użytkownik nie widzi kodu PHP, tylko efekt
	jego działania (np. tekst, tabela).

	Przykład:
	Plik PHP zapisany na serwerze, po otwarciu w przeglądarce
	wyświetla tylko wynik polecenia echo.
*/

/*	Przeglądarka
	Przeglądarka wyświetla wynik działania kodu PHP, czyli HTML
	wygenerowany przez serwer. Nie pokazuje kodu PHP, tylko efekt.

	Przykład:
	Po wpisaniu adresu pliku PHP w przeglądarce, widoczny jest
	tekst wyświetlony przez echo, a nie kod PHP.
*/
//	#endregion


//	#region przydatne funkcje / składnia
//	#region echo
/*	Opis
	Polecenie echo służy do wyświetlania tekstu lub wartości na stronie.
	To najprostszy sposób pokazania użytkownikowi informacji.
*/

/*	Składnia
	echo "tekst";
*/

/*	Przykład:
	echo "Witaj w systemie zarządzania szkołą!";
	//	Wynik: Witaj w systemie zarządzania szkołą!
*/

/*	Zadanie:
	Wyświetl w przeglądarce nazwę swojej szkoły za pomocą echo.
*/
//	#endregion

//	#region komentarz
/*	Opis
	Komentarz to fragment kodu, który opisuje działanie programu.
	Komentarze są ignorowane przez serwer i niewidoczne dla użytkownika.
	Pomagają zrozumieć kod innym osobom lub sobie w przyszłości.
*/

//	Składnia
	//	Komentarz jednoliniowy

	/* Komentarz wieloliniowy
		inaczej: komentarz blokowy
	*/

/*	Przykład:
	//	Wyświetlenie powitania
	echo "Witaj!";

	//	Wyświetlenie informacji o szkole
	echo "Szkoła: Liceum Ogólnokształcące";
	//	Wynik: Witaj!
	//		Szkoła: Liceum Ogólnokształcące
*/

/*	Zadanie:
	Dodaj komentarz do kodu, który wyjaśnia, co robi polecenie echo.
*/
//	#endregion
//	#endregion


//	#region Przykłady
//	#region Wyświetlanie powitania
/*	Opis
	Wyświetlenie prostego powitania na stronie za pomocą echo.
*/

/*	Składnia
	echo "tekst";
*/

/*	Przykład:
	echo "Witaj w aplikacji szkoły!";
	//	Wynik: Witaj w aplikacji szkoły!
*/

/*	Zadanie:
	Zmień tekst powitania na nazwę swojej klasy.
*/
//	#endregion

//	#region Komentarze w kodzie PHP
/*	Opis
	Dodawanie komentarzy do kodu, aby opisać jego działanie.
*/

//	Składnia
	//	Komentarz jednoliniowy

	/* Komentarz
		wieloliniowy */

/*	Przykład:
	//	Wyświetlenie informacji o nauczycielu
	echo "Nauczyciel: Jan Kowalski";

	//	Wyświetlenie informacji o uczniu
	echo "Uczen: Anna Nowak";
	//	Wynik: Nauczyciel: Jan Kowalski
	//		Uczen: Anna Nowak
*/

/*	Zadanie:
	Dodaj komentarz do każdego polecenia echo w swoim pliku.
*/
//	#endregion
//	#endregion


//	#region zadania
/*	[ŁATWE] Wyświetlanie nazwy szkoły
	Utwórz plik PHP, który wyświetli nazwę Twojej szkoły za pomocą echo.
*/

/*	[ŚREDNIE] Wyświetlanie informacji o klasie
	Wyświetl nazwę klasy i liczbę uczniów w jednej linii za pomocą echo.
*/

/*	[TRUDNE] Wyświetlanie planu lekcji
	Wyświetl plan lekcji (np. dzień tygodnia i przedmiot) za pomocą kilku poleceń echo.
	Dodaj komentarze do każdego polecenia.
*/

/*	[EXPERT] Wyświetlanie tabeli HTML z echo
	Za pomocą echo wyświetl prostą tabelę HTML z nazwą szkoły, klasą i liczbą uczniów.
	Dodaj komentarze do każdego polecenia echo.
*/
//	#endregion


//	#region podsumowanie
/*	Kluczowe wnioski
	- PHP działa po stronie serwera, wynik trafia do przeglądarki
	- echo służy do wyświetlania tekstu i informacji na stronie
	- Komentarze pomagają zrozumieć kod, są ignorowane przez serwer
	- Przeglądarka pokazuje tylko wynik działania PHP, nie kod
*/

/*	Co dalej?
	Poznaj zmienne w PHP i typy danych, aby przechowywać i wyświetlać
	różne informacje o szkole, klasach i uczniach.
*/
//	#endregion
