<?php
require_once dirname(__FILE__).'/../config.php';


$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$p = $_REQUEST ['p'];

if ( ! (isset($x) && isset($y) && isset($p))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano ilości lat';
}

if ( $p == "") {
	$messages [] = 'Nie podano oprocentowania';
}

if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Kwota musi być liczbą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Lata muszą być liczbą';
	}

	if (! is_numeric( $p )) {
		$messages [] = 'Oprecentowanie musi być liczbą, używaj ".", nie wpisuj %';
	}	

}

if (empty ( $messages )) {
	
	$x = intval($x);
	$y = intval($y);
	$p = floatval($p);
	
	$result = $x*((100+$p)/100)/($y*12);
}

include 'credit_view.php';