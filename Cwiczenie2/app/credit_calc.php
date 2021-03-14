<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';

function getParams(&$x,&$y,&$p){
	$x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$p = isset($_REQUEST['p']) ? $_REQUEST['p'] : null;	
}

function validate(&$x,&$y,&$p,&$messages){
	if ( ! (isset($x) && isset($y) && isset($p))) {
		return false;
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

	if (! is_numeric( $x )) {
		$messages [] = 'Kwota musi być liczbą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Lata muszą być liczbą';
	}

	if (! is_numeric( $p )) {
		$messages [] = 'Oprecentowanie musi być liczbą, używaj ".", nie wpisuj %';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$x,&$y,&$p,&$result){
	
	$x = intval($x);
	$y = intval($y);
	$p = floatval($p);
	
	$result = $x*((100+$p)/100)/($y*12);
}

$x = null;
$y = null;
$p = null;
$result = null;
$messages = [];

getParams($x,$y,$p);
if ( validate($x,$y,$p,$messages) ) {
	process($x,$y,$p,$result);
}

include 'credit_view.php';