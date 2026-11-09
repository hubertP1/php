# PHP: Pętle while i do-while

## Cele lekcji

Na tej lekcji poznasz pętle **while** i **do-while**, czyli konstrukcje pozwalające
powtarzać blok instrukcji tak długo, jak spełniony jest warunek. Pętle pozwalają
uniknąć kopiowania kodu i są podstawą większości algorytmów, np. sumowania liczb
czy wyznaczania NWD.

## Co będziesz umieć po tej lekcji?

- Napiszesz pętlę **while** i **do-while** z licznikiem.
- Wyjaśnisz różnicę: **while** sprawdza warunek przed wykonaniem bloku,
  a **do-while** wykonuje blok co najmniej raz.
- Poprawnie zakończysz pętlę, aby uniknąć nieskończonego wykonywania.
- Użyjesz zmiennych akumulujących do sumowania i mnożenia.
- Wygenerujesz poprawny HTML, dodając `<br />` na końcu każdej linii.
- Przetestujesz skrypt w przeglądarce i odczytasz wynik.

---

# Informacje

## Ogólne informacje

Pętla (loop) to fragment kodu, który wykonuje się wielokrotnie. Zamiast pisać
ten sam `echo` sto razy, piszesz pętlę, która wykonuje instrukcję dopóki warunek
jest prawdziwy (TRUE). Każda pętla wymaga:

- zmiennej licznika, np. `$i`,
- warunku, który decyduje o kontynuacji,
- zmiany licznika w każdym obiegu, aby warunek kiedyś przestał być spełniony.

Przykłady:

- while (pętla z warunkiem na początku) - wykonuje blok, dopóki warunek jest prawdziwy
- do-while (pętla z warunkiem na końcu) - wykonuje blok co najmniej raz, a potem sprawdza warunek

## Pętla while

Pętla **while** (while loop) sprawdza warunek przed każdym obiegiem. Jeśli warunek
jest od początku fałszywy, blok nie wykona się ani razu. Działanie można zapisać
schematem: warunek? TAK - blok instrukcji - powrót do warunku; NIE - wyjście z pętli.

## Pętla do-while

Pętla **do-while** (do-while loop) wykonuje blok przed sprawdzeniem warunku.
Dzięki temu blok wykona się zawsze przynajmniej raz, nawet gdy warunek jest fałszywy.

---

# Przydatne funkcje / składnia / itd

## Pętla while

### Opis

Pętla `while` powtarza blok instrukcji, dopóki warunek w nawiasach jest prawdziwy.
Warunek jest sprawdzany przed każdym obiegiem.

### Składnia

```php
<?php
while (warunek) {
	// instrukcje wykonywane, dopóki warunek jest prawdziwy
}
?>
```

### Przykład

```php
<?php
// Licznik startowy - pierwsza wartość, od której zaczynamy
$i = 1;

// Pętla wykona się, dopóki $i jest mniejsze lub równe 5
while ($i <= 5) {
	// Wyświetlenie wartości licznika i znacznika nowej linii w HTML
	echo "Liczba: $i<br />";
	// Zwiększenie licznika o 1 - bez tego pętla byłaby nieskończona
	$i++;
}
?>
```

Oczekiwany wynik w przeglądarce:

```
Liczba: 1
Liczba: 2
Liczba: 3
Liczba: 4
Liczba: 5
```

### Zadanie

Napisz skrypt, który w pętli `while` wyświetli liczby od 3 do 7, każdą w osobnej
linii. Użyj `<br />` na końcu każdej linii.

---

## Pętla do-while

### Opis

Pętla `do-while` wykonuje blok instrukcji, a dopiero potem sprawdza warunek.
Blok wykona się przynajmniej raz.

### Składnia

```php
<?php
do {
	// instrukcje wykonywane co najmniej raz
} while (warunek);
?>
```

### Przykład

```php
<?php
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
?>
```

Oczekiwany wynik w przeglądarce:

```
Odliczanie: 10
Odliczanie: 9
...
Odliczanie: 1
Start!
```

### Zadanie

Napisz skrypt, który w pętli `do-while` wyświetli liczby od 5 do 1, a na końcu
komunikat `Koniec!<br />`. Sprawdź, co się stanie, gdy warunek początkowo będzie fałszywy.

---

# Przykłady

## Przykład 1: Wielokrotności liczby 3 (while)

### Opis

Przykład pokazuje podstawową pętlę z licznikiem. Każdy obieg wypisuje wartość
licznika i zwiększa go o 1.

### Składnia

```php
<?php
$i = 1;
while ($i <= 5) {
	// instrukcje
	$i++;
}
?>
```

### Przykład

```php
<?php
// Start licznika - pierwsza wielokrotność liczby 3
$i = 3;
// Pętla działa, dopóki licznik nie przekroczy 15
while ($i <= 15) {
	echo "Wielokrotność 3: $i<br />";
	// Zwiększenie licznika o 3 - kolejna wielokrotność
	$i += 3;
}
?>
```

Oczekiwany wynik: liczby 3, 6, 9, 12 i 15, każda w osobnej linii.

### Zadanie

Zmień skrypt tak, aby wypisywał liczby od 2 do 10 z krokiem 2. Zastanów się,
o ile należy zmienić licznik w każdym obiegu.

---

## Przykład 2: Tabliczka mnożenia przez 3 (do-while)

### Opis

Przykład pokazuje pętlę, która najpierw wykonuje blok, a dopiero potem sprawdza warunek.

### Składnia

```php
<?php
do {
	// instrukcje
} while (warunek);
?>
```

### Przykład

```php
<?php
// Licznik odliczania
// Mnożnik i licznik zaczynają się od 1
$i = 1;
do {
	echo "3 x $i = " . (3 * $i) . "<br />";
	// Zwiększenie licznika
	$i++;
} while ($i <= 5);
?>
```

Oczekiwany wynik: tabliczka mnożenia 3 x 1 do 3 x 5, każda w osobnej linii.

### Zadanie

Zmień skrypt tak, aby wyświetlał tabliczkę mnożenia przez 7 dla liczb od 1 do 10.
Sprawdź, co wyświetli się, gdy początkowa wartość licznika to 11.
// Uwaga: dla `$licznik = 0` pętla wyświetli `Odliczanie: 0`, a licznik zejdzie do -1,
// ponieważ warunek jest sprawdzany dopiero po pierwszym obiegu.

---

# Zadania

## Zadanie 1: [ŁATWE] Rozgrzewka z pętlą while

Napisz skrypt wyświetlający liczby od 10 do 1 w osobnych liniach, używając pętli **while**.
Każda linia powinna kończyć się znacznikiem `<br />`.

Pytania naprowadzające:

- Jaki warunek zakończy pętlę?
- Czy licznik zmienia się w każdym obiegu?

## Zadanie 2: [ŚREDNIE] Suma liczb parzystych

Napisz skrypt obliczający sumę liczb parzystych od 1 do 20 za pomocą pętli **do-while**.
Wynik wyświetl w przeglądarce w formacie: `Suma liczb parzystych od 1 do 20: wynik<br />`.
Zastanów się, jak rozpoznać liczbę parzystą i gdzie zgromadzić wynik sumowania.

Pytania naprowadzające:

- Jakie wartości licznika powinny trafić do sumy, a jakie nie?
- Co wyświetli skrypt, gdy zakres to tylko liczba 1?
- Jak sprawdzić poprawność wyniku dla innego zakresu, np. od 1 do 10?

## Zadanie 3: [TRUDNE] NWD metodą Euklidesa

Napisz skrypt wyznaczający NWD dwóch liczb metodą Euklidesa. Użyj pętli **while**,
dopóki `$b` jest różne od 0. Wynik wyświetl w formacie `NWD = wynik<br />`.
Przetestuj skrypt dla par: `48, 18` oraz `17, 5`.

Pytania naprowadzające:

- Co oznacza wartość `$b` po każdym obiegu?
- Dlaczego pętla zawsze się kończy?
- Jaki wynik powinien wyjść dla pary `17, 5`?

## Zadanie 4: [EXPERT] Suma cyfr liczby

Napisz skrypt obliczający sumę cyfr liczby `98765`, używając pętli **while**.
Wskazówka: pomyśl, jak wydobyć pojedynczą cyfrę liczby i jak pozbyć się już
przetworzonej części. Wynik wyświetl w formacie `Suma cyfr: wynik<br />`.
Następnie zmodyfikuj skrypt tak, aby użyć pętli **do-while** i sprawdź, co się stanie
dla liczby `0`.

---

# Podsumowanie

## Kluczowe wnioski

- Pętla **while** sprawdza warunek przed wykonaniem bloku.
- Pętla **do-while** wykonuje blok co najmniej raz.
- Licznik musi być zmieniany w każdym obiegu, aby pętla się zakończyła.
- Zmienna akumulująca przechowuje wynik sumowania lub mnożenia.

## Najczęstsze błędy

- Brak inkrementacji lub dekrementacji licznika, co prowadzi do nieskończonej pętli.
- Pomylenie warunku kończącego z warunkiem kontynuującym.
- Brak znacznika `<br />`, przez co wszystkie wyniki wyświetlają się w jednej linii.
- Umieszczenie instrukcji akumulującej poza blokiem `if`.

## Dobre praktyki

- Nazywaj zmienne opisowo, np. `$licznik`, `$suma`.
- Komentuj kluczowe fragmenty logiki.
- Testuj skrypt dla kilku zakresów danych, w tym dla wartości brzegowych.
- Używaj autoformatowania w VS Code i podpowiedzi PHP Intelephense.

## Co dalej?

- Poćwicz pętlę **for**, która łączy licznik, warunek i zmianę w jednej linii.
- Sprawdź, jak działa pętla z instrukcją `break` i `continue`.
- Napisz własny skrypt, który generuje tabliczkę mnożenia w HTML.
