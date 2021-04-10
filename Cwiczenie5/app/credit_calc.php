<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

function getParams(&$form){
	$form['x'] = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
	$form['y'] = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
	$form['p'] = isset($_REQUEST['p']) ? $_REQUEST['p'] : null;	
}

function validate(&$form,&$messages){
	if ( ! (isset($form['x']) && isset($form['y']) && isset($form['p']))) {
		return false;
	}

	if ( $form['x'] == "") {
                $messages [] = 'Nie podano kwoty';
        }
        if ( $form['y'] == "") {
                $messages [] = 'Nie podano ilości lat';
        }

        if ( $form['p'] == "") {
                $messages [] = 'Nie podano oprocentowania';
        }

	if (! is_numeric( $form['x'] )) {
		$messages [] = 'Kwota musi być liczbą';
	}
	
	if (! is_numeric( $form['y'] )) {
		$messages [] = 'Lata muszą być liczbą';
	}

	if (! is_numeric( $form['p'] )) {
		$messages [] = 'Oprecentowanie musi być liczbą, używaj ".", nie wpisuj %';
	}	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$form,&$result){
	
	$form['x'] = intval($form['x']);
	$form['y'] = intval($form['y']);
	$form['p']= floatval($form['p']);
	
	$result = $form['x']*((100+$form['p'])/100)/($form['y']*12);
}

$form = null;
$result = null;
$messages = [];

getParams($form);
if ( validate($form,$messages) ) {
	process($form,$result);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);

$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/credit_view.tpl');