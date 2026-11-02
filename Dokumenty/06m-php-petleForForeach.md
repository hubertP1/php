# PHP: Pętle for i foreach

## Cele lekcji

Na tej lekcji poznasz pętle `for` i `foreach` w języku PHP. Dowiesz się, kiedy
używać każdej z nich i jak przechodzić po elementach tablic. Nauczysz się też
śledzić wartości zmiennych w debuggerze VS Code.

## Co będziesz umieć po tej lekcji?

- Napisać pętlę `for` z warunkiem i krokiem.
- Iterować po tablicy indeksowanej i asocjacyjnej za pomocą `foreach`.
- Wyjaśnić różnicę między pętlą `for` (licznik) a `foreach` (iteracja po elementach).
- Używać `break` i `continue` do przerywania pętli.
- Użyć debuggera w VS Code do śledzenia wartości zmiennych.

---

# Informacje

## Ogólne informacje

Pętla pozwala wielokrotnie wykonać ten sam fragment kodu. Dzięki temu nie musisz
pisać tej samej instrukcji wiele razy. Pętle są podstawowym narzędziem przy
pracy z tablicami i danymi.

Przykłady:

- Pętla `for` - wykonuje kod, dopóki licznik spełnia warunek.
- Pętla `foreach` - wykonuje kod dla każdego elementu tablicy.

## Idea pętli

Każda pętla składa się z warunku, ciała pętli, kroku i ponownego sprawdzenia
warunku. Pętla działa tak długo, jak warunek jest prawdziwy.

Jak wypisać liczby od 1 do 10 bez pisania dziesięciu instrukcji?

## Pętla for

Pętla `for` (for loop) - pętla z licznikiem, w której określasz inicjalizację,
warunek i krok. Używasz jej, gdy znasz liczbę powtórzeń lub zakres wartości.

```php
<?php
// Wypisuje liczby od 1 do 10 - inicjalizacja, warunek i krok są w nawiasie
for ($i = 1; $i <= 10; $i++) {
	// Ciało pętli - wykonuje się dla każdej wartości $i
	echo $i . PHP_EOL;
}
```

Kolejne wartości `$i`:

1. Inicjalizacja: `$i = 1`.
2. Warunek: `1 <= 10` jest prawdziwe, wykonaj ciało.
3. Krok: `$i++` zwiększa `$i` do 2.
4. Warunek sprawdzany ponownie, aż `$i` będzie równe 11 (warunek fałszywy, pętla kończy działanie).

Wynik:

```text
1
2
...
10
```

## Pętla foreach

Pętla `foreach` (foreach loop) - pętla przechodząca po każdym elemencie tablicy.
Analogia: `foreach` to "przejdź po każdym elemencie", a `for` to "policz od 1 do 10".

```php
<?php
// Tablica indeksowana - elementy mają numery 0, 1, 2
$owoce = ["jabłko", "gruszka", "śliwka"];

// Dla każdego elementu z $owoce zmienna $owoc przyjmuje jego wartość
foreach ($owoce as $owoc) {
	echo $owoc . PHP_EOL;
}

// Tablica asocjacyjna - elementy mają klucze tekstowe
$ceny = ["jabłko" => 3, "gruszka" => 5];

// Klucz trafia do $nazwa, a wartość do $cena
foreach ($ceny as $nazwa => $cena) {
	echo "$nazwa kosztuje $cena zł" . PHP_EOL;
}
```

Wynik:

```text
jabłko
gruszka
śliwka
jabłko kosztuje 3 zł
gruszka kosztuje 5 zł
```

## Klucz, wartość oraz break i continue

Klucz (key) - identyfikator elementu tablicy, np. indeks `0` lub tekst `"jabłko"`.

Wartość (value) - dane przechowywane w elemencie tablicy.

Instrukcja `break` przerywa pętlę całkowicie. Instrukcja `continue` pomija
bieżącą iterację i przechodzi do następnej.

```php
<?php
// Wypisuje liczby od 1 do 4, pomijając 3 i przerywając przy 5
for ($i = 1; $i <= 5; $i++) {
	// Jeśli $i równa się 3, pomiń resztę ciała i przejdź do następnej wartości
	if ($i === 3) {
		continue;
	}

	// Jeśli $i równa się 5, przerwij całą pętlę
	if ($i === 5) {
		break;
	}

	echo $i . PHP_EOL;
}
```

Wynik:

```text
1
2
4
```

---

# Przydatne funkcje / składnia

## Pętla for

### Opis

Pętla `for` składa się z trzech części w nawiasie: inicjalizacji, warunku i kroku.

### Składnia

```php
for (inicjalizacja; warunek; krok) {
	// ciało pętli
}
```

### Przykład

```php
<?php
// Wypisuje liczby parzyste od 2 do 10
for ($i = 2; $i <= 10; $i += 2) {
	echo $i . PHP_EOL;
}
```

Wynik:

```text
2
4
6
8
10
```

### Zadanie

Napisz skrypt wypisujący liczby od 10 do 1 w kolejności malejącej.

## Pętla foreach

### Opis

Pętla `foreach` przechodzi po wszystkich elementach tablicy. Może pobierać
samą wartość albo parę klucz => wartość.

### Składnia

```php
foreach ($tablica as $wartosc) {
	// ciało pętli
}

foreach ($tablica as $klucz => $wartosc) {
	// ciało pętli
}
```

### Przykład

```php
<?php
// Tablica asocjacyjna z wiekiem uczniów
$wiek = ["Ania" => 17, "Piotr" => 18];

// Wypisuje imię i wiek każdego ucznia
foreach ($wiek as $imie => $lata) {
	echo "$imie ma $lata lat" . PHP_EOL;
}
```

Wynik:

```text
Ania ma 17 lat
Piotr ma 18 lat
```

### Zadanie

Napisz skrypt, który dla tablicy `$liczby = [2, 7, 4, 9]` wypisze tylko
liczby parzyste, używając `foreach` i `continue`.

## Funkcje count() i array_keys()

### Opis

Funkcja `count()` zwraca liczbę elementów tablicy. Funkcja `array_keys()` zwraca
tablicę złożoną z kluczy podanej tablicy.

### Składnia

```php
count($tablica);
array_keys($tablica);
```

### Przykład

```php
<?php
$produkty = ["chleb" => 4.5, "mleko" => 3.2];

// Liczba elementów tablicy $produkty
echo count($produkty) . PHP_EOL;

// Tablica kluczy: ["chleb", "mleko"]
$klucze = array_keys($produkty);
echo $klucze[1] . PHP_EOL;
```

Wynik:

```text
2
mleko
```

### Zadanie

Napisz skrypt, który dla tablicy `$miasta = ["Kraków", "Gdańsk", "Lublin"]`
wypisze liczbę miast oraz pierwsze miasto z tablicy.

---

# Przykłady

## Tabliczka mnożenia

### Opis

Pętla `for` wykonuje obliczenia dla kolejnych wartości licznika.

### Składnia

```php
for (inicjalizacja; warunek; krok) {
	// obliczenia
}
```

### Przykład

```php
<?php
$n = 7;

// Wypisuje tabliczkę mnożenia dla liczby $n od 1 do 10
for ($i = 1; $i <= 10; $i++) {
	echo "$n x $i = " . ($n * $i) . PHP_EOL;
}
```

Wynik:

```text
7 x 1 = 7
7 x 2 = 14
...
7 x 10 = 70
```

### Zadanie

Zmień wartość `$n` na inną liczbę i sprawdź, czy wynik jest poprawny.

## Średnia ocen

### Opis

Pętla `foreach` przechodzi po ocenach, a zmienne pomocnicze zbierają sumę
i liczbę ocen niedostatecznych.

### Składnia

```php
foreach ($tablica as $wartosc) {
	// obliczenia
}
```

### Przykład

```php
<?php
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

echo "Średnia: " . round($srednia, 2) . PHP_EOL;
echo "Liczba ocen niedostatecznych: $niedostateczne" . PHP_EOL;
```

Wynik:

```text
Średnia: 3.33
Liczba ocen niedostatecznych: 1
```

### Zadanie

Zmodyfikuj skrypt tak, aby obliczał średnią tylko z ocen pozytywnych (3 i wyżej).

## Lista produktów

### Opis

Tablica asocjacyjna jest przechodzona przez `foreach`, a klucze pobrane przez
`array_keys()` wykorzystuje pętla `for`.

### Składnia

```php
foreach ($tablica as $klucz => $wartosc) {
	// obliczenia
}
```

### Przykład

```php
<?php
$produkty = [
	"chleb" => 4.5,
	"mleko" => 3.2,
	"masło" => 7.9,
];

$suma = 0;

// Wypisz każdy produkt i dodaj jego cenę do sumy
foreach ($produkty as $nazwa => $cena) {
	echo "$nazwa: $cena zł" . PHP_EOL;
	$suma += $cena;
}

echo "Suma: $suma zł" . PHP_EOL;

// Pobierz same nazwy produktów
$klucze = array_keys($produkty);

// Krok 2 - wypisz co drugi produkt (indeksy 0, 2, ...)
for ($i = 0; $i < count($klucze); $i += 2) {
	echo "Co drugi produkt: " . $klucze[$i] . PHP_EOL;
}
```

Wynik:

```text
chleb: 4.5 zł
mleko: 3.2 zł
masło: 7.9 zł
Suma: 15.6 zł
Co drugi produkt: chleb
Co drugi produkt: masło
```

### Zadanie

Dopisz do tablicy kolejny produkt i sprawdź, czy skrypt nadal działa poprawnie.

---

# Zadania

## Zadanie 1: Pętla for [ŁATWE]

Napisz skrypt wypisujący wielokrotności 3 od 3 do 30 włącznie, używając pętli `for`.
Wynik ma być w kolejnych wierszach.

## Zadanie 2: Pętla foreach [ŚREDNIE]

Dana jest tablica `$temperatury = [18, 22, 25, 19, 30, 27];`. Użyj `foreach`, aby:

1. wypisać temperatury wyższe niż 20,
2. obliczyć i wypisać średnią wszystkich temperatur (zaokrągloną do 2 miejsc).

## Zadanie 3: Klucze i wartości [TRUDNE]

Dla tablicy `$pensje = ["Ania" => 4200, "Piotr" => 3800, "Kasia" => 5100];`:

1. wypisz każdego pracownika w formacie `imie: pensja zł`,
2. wypisz pracownika z najwyższą pensją,
3. użyj pętli `for` i `array_keys()` do wypisania co drugiego pracownika.

## Zadanie 4: Przerywanie pętli [EXPERT]

Napisz skrypt, który w tablicy `$liczby = [3, 8, 12, 5, 20, 7, 14]` wyszuka
pierwszą liczbę większą niż 10 i wypisze jej indeks. Użyj `foreach` z kluczem
i przerwij pętlę po znalezieniu. Jeśli takiej liczby nie ma, wypisz komunikat.
Przetestuj skrypt także na tablicy, w której nie ma liczb większych niż 10.

---

# Podsumowanie

## Kluczowe wnioski

- Pętla `for` jest najlepsza, gdy znasz liczbę powtórzeń lub zakres licznika.
- Pętla `foreach` jest najlepsza do przechodzenia po elementach tablicy.
- `break` przerywa pętlę, a `continue` pomija bieżącą iterację.
- Debugger w VS Code pozwala śledzić wartości zmiennych krok po kroku.

## Najczęstsze błędy

- Użycie `<=` zamiast `<` przy `count()`, co prowadzi do odwołania się do nieistniejącego indeksu.
- Zapomnienie o kroku, co powoduje nieskończoną pętlę.
- Mylenie klucza z wartością w `foreach`.

## Dobre praktyki

- Używaj `foreach` do iteracji po tablicach, zamiast `for` z ręcznym indeksem.
- Stosuj opisowe nazwy zmiennych.
- Formatuj kod skrótem Shift + Alt + F.
- Testuj skrypty na pustych tablicach i wartościach granicznych.

## Co dalej?

- Poznaj funkcje `array_map()`, `array_filter()` oraz pętlę `while`.
- Ćwicz debugowanie z punktami przerwania w VS Code.
