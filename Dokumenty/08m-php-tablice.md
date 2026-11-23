# Tablice w PHP

## Wstęp

### Cele lekcji

Tematem lekcji są tablice w PHP. Uczniowie poznają, jak tworzyć listy wartości, dodawać i odczytywać elementy oraz jak używać pętli do pracy z tablicami. Tablice są podstawą przechowywania wielu danych w aplikacjach, np. list uczniów, ocen czy sal lekcyjnych.

### Co będziesz umieć po tej lekcji?

- Tworzyć tablice w PHP
- Dodawać i odczytywać elementy tablicy
- Przetwarzać tablice za pomocą pętli
- Zastosować tablice w kontekście systemu szkolnego

## Ogólne informacje

Tablica to specjalny typ zmiennej, która przechowuje wiele wartości w jednym miejscu. Dzięki tablicom można łatwo zarządzać listami, takimi jak uczniowie, oceny czy sale lekcyjne.

Przykłady:

- Tablica - lista uczniów w klasie
- Tablica - lista ocen ucznia

### Tablica

Tablica to zbiór wartości, które można przechowywać pod jedną nazwą zmiennej. Każdy element tablicy ma swój numer (indeks).

Przykład:

```php
$uczniowie = array("Anna", "Jan", "Kasia");
```

### Indeks tablicy

Indeks to numer lub nazwa, pod którą przechowywany jest element tablicy. W tablicach indeksowanych numery zaczynają się od 0.

Przykład:

```php
$oceny = array(5, 4, 3);
$oceny[0] // daje 5
```

## Przydatne funkcje / składnia

### Tworzenie tablicy

#### Opis

Tworzenie tablicy polega na zapisaniu wielu wartości pod jedną nazwą zmiennej. Można użyć funkcji array() lub nawiasów [].

#### Składnia

```php
$tablica = array(wartosc1, wartosc2, wartosc3); // sposób przestarzały
$tablica = [wartosc1, wartosc2, wartosc3];
```

#### Przykład

```php
$uczniowie = array("Anna", "Jan", "Kasia"); // sposób przestarzały
$oceny = [5, 4, 3];
// Tablica $uczniowie zawiera 3 imiona
// Tablica $oceny zawiera 3 liczby
```

#### Zadanie

Stwórz tablicę z nazwami trzech sal lekcyjnych: "Sala 101", "Sala 102", "Sala 103"

### Odczyt elementu tablicy

#### Opis

Aby odczytać wartość z tablicy, należy podać jej indeks w nawiasach kwadratowych. Indeksy zaczynają się od 0.

#### Składnia

```php
$tablica[indeks];
```

#### Przykład

```php
$uczniowie = ["Anna", "Jan", "Kasia"];
echo $uczniowie[1];
// Wynik: Jan
```

#### Zadanie

Wyświetl drugą salę z tablicy sal lekcyjnych

## Przykłady

### Tablica uczniów w klasie

#### Opis

Przechowywanie listy uczniów w tablicy pozwala łatwo zarządzać danymi klasy.

#### Składnia

```php
$uczniowie = ["Anna", "Jan", "Kasia"];
```

#### Przykład

```php
$uczniowie = ["Anna", "Jan", "Kasia"];
echo $uczniowie[0];
// Wynik: Anna
```

#### Zadanie

Dodaj do tablicy uczniów nową osobę: "Piotr"

### Tablica ocen ucznia

#### Opis

Tablica ocen pozwala przechowywać wszystkie oceny ucznia w jednym miejscu i łatwo je przetwarzać.

#### Składnia

```php
$oceny = [5, 4, 3, 5];
```

#### Przykład

```php
$oceny = [5, 4, 3, 5];
$suma = 0;
foreach ($oceny as $ocena) {
    $suma += $ocena;
}
echo $suma;
// Wynik: 17
```

#### Zadanie

Oblicz średnią ocen ucznia z tablicy $oceny

## Zadania

### Zadanie 1 (poziom: łatwy)

Stwórz tablicę z trzema nazwami sal lekcyjnych i wyświetl pierwszą salę

### Zadanie 2 (poziom: średni)

Stwórz tablicę z dwoma nauczycielami, dodaj trzeciego nauczyciela i wyświetl wszystkich nauczycieli

### Zadanie 3 (poziom: trudny)

Stwórz tablicę z ocenami ucznia, oblicz średnią i wyświetl wynik

### Zadanie 4 (poziom: ekspert)

Stwórz tablicę asocjacyjną, gdzie klucz to nazwa przedmiotu, a wartość to ocena. Wyświetl wszystkie przedmioty i ich oceny.

## Podsumowanie

### Kluczowe wnioski

- Tablica pozwala przechowywać wiele wartości pod jedną nazwą
- Indeksy umożliwiają dostęp do konkretnych elementów tablicy
- Tablice są podstawą pracy z danymi w aplikacjach szkolnych
- Pętle pozwalają przetwarzać wszystkie elementy tablicy

### Co dalej?

Można pogłębić wiedzę, ucząc się o tablicach asocjacyjnych, tablicach wielowymiarowych oraz funkcjach do pracy z tablicami w PHP
