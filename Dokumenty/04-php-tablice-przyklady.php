<?php

// #region definiowanie
// #region tablica_zwykla
// zdefiniuj pustą tablicę zwykłą
$tablicaZwyklaPusta = [];

// wstaw 'element pierwszy' do $tablicaZwyklaPusta pod indeksem 0
$tablicaZwyklaPusta[0] = 'element pierwszy';

// wstaw pustą tablicę do $tablicaZwyklaPusta pod indeksem 1
$tablicaZwyklaPusta[1] = [];

// przypisz wartość 'element 1.1' do $tablicaZwyklaPusta pod indeksem 1(pierwszy wymiar).0(drugi wymiar)
$tablicaZwyklaPusta[1][0] = 'element 1.1';

// zdefiniuj wypełnioną tablicę zwykłą
$tablicaZwyklaNiepusta = [4, 8.46, 'sdfg', true, []]; // najwyższy index: 4

// Przypisz wartość 'najbliższy wolny index' do $tablicaZwyklaNiepusta pod najniższym wolnym indeksem, czyli 5
$tablicaZwyklaNiepusta[] = 'najbliższy wolny index';
// #region

// #region tablica asocjacyjna
// zdefiniuj pustą tablicę $tablicaAsocjacyjna
$tablicaAsocjacyjna = [];

// przypisz wartość 'element pierwszy' do $tablicaAsocjacyjna pod indeksem 'jakisIndeks'
$tablicaAsocjacyjna['jakisIndeks'] = 'element pierwszy';

// przypisz pustą tablicę do $tablicaAsocjacyjna pod indeksem 'drugiIndeks'
$tablicaAsocjacyjna['drugiIndex'] = [];

// przypisz wartość 'element drugiIndex.0' do $tablicaAsocjacyjna pod indeksem 'drugiIndeks'(pierwszy wymiar).0(drugi wymiar)
$tablicaAsocjacyjna['drugiIndex'][0] = 'element drugiIndex.0';

// przypisz tablicę z ocenami do $oceny pod indeksem 'Jan Kowalski'
$oceny = [];
$oceny['Jan Kowalski'] = [
	'polski' => 5,
	'chemia' => 5,
	'fizyka' => 5,
	'angielski' => 5,
	'php' => 5,
	'python' => 5,
	'js' => 5,
	'html' => 5,
];
// #endregion
// #endregion
