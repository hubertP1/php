<?php
#region liczby
$zmienna = '5asdfasdf';
$zmienna * 2;	/* Wynik: 10
	1.	'5asdfasdf'	-> 5
	2.	5 * 2 = 10
*/
$liczba1 = 5;
$liczba2 = 10;
#endregion

#region stringi
$wynik = $liczba1 + $liczba2;	//	Wynik: 15
$string1 = 'asdf 1';
$string2 = 'asdf 2';
$wynikString = $string1 . '; ' . $string2;	//	wynik: 'asdf 1; asdf 2'
$zmiennaCiekawa = 'string1';
$$zmiennaCiekawa;	//	zwróć zawartość zmiennej 'string1'

// Apostrof: string nieinterpretowany
$stringApostrof = 'asdf\n';	//	wynik: asdf\n

// Cudzyslow: string interpretowany
$stringCudzyslow = "asdf\n";	//	wynik: asdf[nowaLinia]
#endregion

#region boolean
$zmiennaBool1 = true;
$zmiennaBool2 = false;
$zmiennaBoolWynik = $zmiennaBool1 + $zmiennaBool2;	//	false
#endregion
