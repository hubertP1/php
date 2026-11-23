<?php

//Zadanie 1
echo "Zadanie 1---------------------------";

$sale_lekcyjne = ['006', '121', '207'];

echo "\nTablica sale_lekcyjne: ";
foreach ($sale_lekcyjne as $sala){
    echo $sala . ", ";
}

echo "\nPierwsza sala lekcujna z tablicy: " . $sale_lekcyjne[0 /*1-1*/];

//Zadanie 2
echo "\n\nZadanie 2---------------------------";

$nauczyciele = ["nauczyciel1", "nauczyciel2"];

echo "\nTablica nauczyciele: ";
foreach ($nauczyciele as $nauczyciel){
    echo $nauczyciel . ", ";
}

$dodany_nauczyciel = "nauczyciel3";
$nauczyciele[] = $dodany_nauczyciel;
echo "\n\nDodano nowego nauczyciela do tablicy nauczyciele,";

echo "\nTablica nauczyciele: ";
foreach ($nauczyciele as $nauczyciel){
    echo $nauczyciel . ", ";
}

//Zadanie 3
echo "\n\nZadanie 3---------------------------";

$uczniowie = [
	"Anna" => ["oceny" => ["matematyka" => 5, "polski" => 3, "angielski" => 6, "fizyka" => 4, "chemia" => 5]],
    "Piotr" => ["oceny" => ["matematyka" => 3, "polski" => 2, "angielski" => 4, "fizyka" => 5, "chemia" => 2]],
    "Michał" => ["oceny" => ["matematyka" => 4, "polski" => 5, "angielski" => 5, "fizyka" => 6, "chemia" => 4]]

];
$uczen = "Anna";
$oceny = $uczniowie[$uczen]["oceny"];
$suma = 0;

echo "\nOceny ucznia: " . $uczen;
foreach ($oceny as $przedmiot => $ocena) {
    echo "\n    " . $przedmiot . " -> " . $ocena; 
    $suma += $ocena;
}
$srednia = $suma / count($oceny);
echo "\nŚrednia ocen: " . number_format($srednia, 2);

//Zadanie 4
echo "\n\nZadanie 4---------------------------";

$przedmioty = [
    "matematyka" => 5,
    "polski" => 3,
    "angielski" => 6,
    "niemiecki" => 5,
    "fizyka" => 5,
    "chemia" => 5,
    "biologia" => 4,
    "geografia" => 4,
];

foreach ($przedmioty as $przedmiot => $ocena) {
    echo "\n" . $przedmiot . " -> " . $ocena;
}

//Zadanie 5
echo "\n\nZadanie 5---------------------------";

$liczby = [1, 2, 3, 4, 5];
echo "\nTablica liczby: ";
foreach ($liczby as $liczba){
    echo $liczba . ", ";
}

//funkcja zwracająca kwadrat liczb z tablicy
$liczbyPodwojone = array_map(function($element) {
    return $element ** 2;
}, $liczby);

echo "\nTablica liczbyPodwojone z elemnatmi podniesionymi do kwadratu: ";
foreach ($liczby as $index => $liczba){
    echo "\nKwadrat liczby " . $liczba . " to " . $liczbyPodwojone[$index];
}

//Zadanie 6
echo "\n\nZadanie 6---------------------------";

$cyfry = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "\nTablica cyfry: ";
foreach ($cyfry as $cyfra){
    echo $cyfra . ", ";
}

$wiekszeNiz5 = array_filter($cyfry, function($element) {
    return $element > 5;
});

echo "\nTablica wiekszeNiz5 z liczbami a tablicy cyfry: ";
foreach ($wiekszeNiz5 as $liczba){
    echo $liczba . ", ";
}
