<?php

// #region składnia
/* skladnia
if (pierwszyWarunek) {
	// instrukcja gdy pierwszyWarunek jest prawdziwy
} else if (drugiWarunek) {
	// instrukcja gdy drugiWarunek jest prawdziwy
} else {
	// instrukcja gdy żaden warunek nie jest prawdziwy
}
*/

$wiek = 23;
if ($wiek > 18) {
	echo 'jesteś dorosły';
} else if ($wiek === 18) {
	echo 'w tym roku stajesz się pełnoletni';
} else { // $wiek < 18
	echo 'jesteś nieletni';
}
// #endregion

// #region składnia skrócona
// 	$warunek
// 	? operacjaGdyPrawda
// 	: operacjaGdyFałsz

$czyDzisWeekend = false;
$wynik = $czyDzisWeekend
?	'dzis jest weekend'	//	$wynik -> 'dzis jest weekend'
:	'dzis nie jest weekend';	//	$wynik -> 'dzis nie jest weekend'

$wiek = 23;
$wynik = $wiek > 18
?	'jesteś dorosły'	//	$wynik -> 'jesteś dorosły'
:	(
	$wiek === 18
	?	'w tym roku stajesz się pełnoletni'	//	$wynik -> 'w tym roku stajesz się pełnoletni'
	:	'jesteś nieletni'	//	$wynik -> 'jesteś nieletni'
);
// #endregion

// #region falsy
$wynik = $wiek == '23'; /* true ('23' == '23')
	1.	$wiek: 23 -> '23'
	2.	'23' == '23'
*/

$wynik = $wiek === '23'; /* false (int === string)
	1.	int($wiek) === string('18')
*/

/* falsy - zawsze fałsz
0	-> false
[]	-> false
''	-> false
0.0	-> false
null	-> false
*/

// truly - wszystko, co nie jest falsy

$wynik = 0 == ''	/* true
	1. 0 -> false
	2. '' -> false
	3. false == false -> true
*/
$wynik = 0 == false	/* true
	1. 0 -> false
	2. false == false -> true
*/
$wynik = 0 === false	/* false
	1. int !== boolean -> false
*/
// #endregion

// #region operator && (and)
if ($warunek1 && $warunek2) {
	// wykonaj, jesli $warunek1 i $warunek2 sa prawdziwe
} else {
	// wykonaj, jesli min. jeden warunek jest fałszywy
}
// #endregion

// #region operator || (or)
if ($warunek1 || $warunek2) {
	// wykonaj, jesli min. jeden warunek jest prawdziwy
} else {
	// wykonaj, jesli $warunek1 i $warunek2 sa fałszywe
}
// #endregion

// #region operator ! (negacja)
$wartoscFalse = false;
!$wartoscFalse -> true
// #endregion
