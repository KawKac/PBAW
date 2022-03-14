<?php
require_once dirname(__FILE__).'/../config.php';
$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
if ( ! (isset($x) && isset($y))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "") {
	$messages [] = 'Nie podano liczby kwoty do pożyczenia';
}
if ( $y == "") {
	$messages [] = 'Nie podano liczby rat';
}
if (empty( $messages )) {
	if (! is_numeric( $x )) {
		$messages [] = 'Proszę wprowadzić liczbę całkowitą w polu kwoty pożyszki';
	}

	if (! is_numeric( $y )) {
		$messages [] = 'Proszę wprowadzić liczbę całkowitą w polu ilości rat';
	}
}

if (empty ( $messages )) {
	$x = intval($x);
	$y = intval($y);

	$results = ($x/$y)+($x/$y)*0.02;
}
include 'calc_view.php';
