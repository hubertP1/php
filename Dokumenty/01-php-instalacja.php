<?php
// #region wstęp
/*	Cele lekcji
	Instalacja środowiska lokalnego do PHP (XAMPP), poznanie struktury folderów
	projektu oraz utworzenie pierwszego pliku PHP. Lekcja wprowadza do pracy
	z PHP i pokazuje, jak rozpocząć budowę aplikacji szkolnej.
*/

/*	Co będziesz umieć po tej lekcji?
	- Zainstalować XAMPP i uruchomić serwer lokalny
	- Rozpoznać strukturę folderów projektu PHP
	- Utworzyć i uruchomić pierwszy plik PHP
	- Zrozumieć, jak działa serwer lokalny i pliki PHP
*/
// #endregion


// #region informacje
/*	Ogólne informacje
	Instalacja środowiska programistycznego to pierwszy krok w nauce PHP.
	XAMPP pozwala uruchomić serwer lokalny, na którym testuje się aplikacje.
	Struktura folderów projektu ułatwia organizację kodu i plików.
	Pierwszy plik PHP to początek budowy systemu zarządzania szkołą.

	Przykłady:
	- XAMPP - darmowy pakiet do uruchamiania serwera lokalnego
	- Plik PHP - plik z kodem wykonywanym przez serwer
*/

/*	XAMPP
	XAMPP to darmowy pakiet zawierający serwer Apache, PHP i MariaDB.
	Umożliwia uruchamianie aplikacji PHP na własnym komputerze.

	Przykład:
	Po instalacji XAMPP, pliki projektu umieszcza się w folderze:
	C:\xampp\htdocs\moj-projekt
*/

/*	Plik PHP
	Plik PHP to plik z rozszerzeniem .php, zawierający kod wykonywany przez serwer.
	Każdy plik PHP zaczyna się od znacznika '<?php' i może zawierać instrukcje PHP.
	Każdy blok PHP kończy się znacznikiem '?>'. Jeśli plik kończy się kodem PHP, to
		znacznik zamykający '?>' powinien być usunięty.

	Przykład:
		echo "Witaj w systemie szkoły!";
*/
// #endregion


// #region przydatne funkcje / składnia
// #region echo
/*	Opis
	Funkcja echo służy do wyświetlania tekstu lub wartości na stronie.
*/

/*	Składnia
	echo "tekst";
	echo 'zmienna1:', $zmienna1, '; zmienna2:', $zmienna2, ';';
*/

/*	Przykład:
		echo "Witaj w systemie szkoły!";
	// Wynik: Witaj w systemie szkoły!
*/

/*	Zadanie:
	Wyświetl na stronie tekst: "Pierwszy plik PHP działa poprawnie".
*/
// #endregion

// #region komentarze
/*	Opis
	Komentarze pozwalają opisywać kod, są ignorowane przez serwer.
	Pomagają zrozumieć, co robi dana część programu.
*/

//  Składnia
	// Komentarz jednoliniowy
	/*	Komentarz blokowy (wieloliniowy) */
//	Koniec składni

//	Przykład:
	// To jest komentarz
	echo "Komentarze są ważne!";
	/*	Komentarz wieloliniowy
		inaczej komentarz blokowy
	*/
	// Wynik: Komentarze są ważne!
//	Koniec przykładu

/*	Zadanie:
	Dodaj komentarz do swojego pliku PHP, wyjaśniający, co robi kod.
*/
// #endregion
// #endregion


// #region Przykłady
// #region Utworzenie pierwszego pliku PHP
/*	Opis
	Tworzenie pliku PHP w folderze projektu i wyświetlenie powitania.
*/

/*	Składnia
	echo "Witaj w systemie szkoły!";
*/

/*	Przykład:
	1. Utwórz plik o nazwie index.php w folderze projektu.
	2. Wklej kod:
		echo "Witaj w systemie szkoły!";
	// Wynik: Witaj w systemie szkoły!
*/

/*	Zadanie:
	Utwórz plik index.php i wyświetl w nim nazwę swojej szkoły.
*/
// #endregion

// #region Struktura folderów projektu
/*	Opis
	Organizacja plików w projekcie ułatwia pracę i rozwijanie aplikacji.
*/

/*	Składnia
	Folder główny: szkoła/
	Pliki: index.php, style.css, README.txt
	Podfoldery: uczniowie/, nauczyciele/, klasy/
*/

/*	Przykład:
	szkoła/
	├── index.php
	├── uczniowie/
	├── nauczyciele/
	└── klasy/
	// Każdy folder przechowuje pliki związane z danym modułem
*/

/*	Zadanie:
	Zaplanuj strukturę folderów dla systemu szkoły: uczniowie, nauczyciele, klasy.
*/
// #endregion
// #endregion


// #region zadania
/*	Odpowiedzi do zadań proszę zapisać:
	w formacie 'zadanie-X.php' (X to numer zadania
		np. 'zadanie-1.php')
	w katalogu
		'W:\numerKlasy\php\data-nazwaPlikuBezRozszerzenia\
		ImieNazwisko\''
		np. 'W:\1a\php\20260327-01-php-instalacja\
		JanKowalski\zadanie-1.php'
	Nie wrzucaj katalogu 'node_modules' ani innych zbędnych
		(zwłaszcza dużych) katalogów,
		tylko same pliki z rozwiązaniami
*/

/*	[ŁATWE] Instalacja XAMPP
	Zainstaluj XAMPP na swoim komputerze i uruchom serwer Apache.
*/

/*	[ŚREDNIE] Komentarze w pliku PHP
	Dodaj komentarz wyjaśniający, co robi Twój plik index.php.
*/

/*	[TRUDNE] Wyświetlanie informacji o szkole
	W pliku index.php wyświetl nazwę szkoły, adres i liczbę uczniów.
*/

/*	[EXPERT] Rozbudowa powitania
	W pliku index.php wyświetl powitanie, nazwę szkoły i aktualną datę.
*/
// #endregion


// #region podsumowanie
/*	Kluczowe wnioski
	- Instalacja XAMPP pozwala uruchomić serwer lokalny do PHP
	- Pliki PHP są wykonywane przez serwer i wyświetlają wyniki w przeglądarce
	- Struktura folderów projektu ułatwia organizację kodu
	- echo służy do wyświetlania tekstu, komentarze pomagają opisywać kod
*/

/*	Co dalej?
	Poznaj, jak działa PHP na serwerze i jak wyświetla dane w przeglądarce.
	W kolejnej lekcji nauczysz się, jak PHP komunikuje się z przeglądarką
	i jak dodawać komentarze do kodu.
*/
// #endregion
