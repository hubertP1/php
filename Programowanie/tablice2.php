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
