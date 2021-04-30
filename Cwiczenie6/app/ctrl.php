<?php

require_once dirname (__FILE__).'/../config.php';

@$action = $_REQUEST['action'];

switch ($action) {
	default : // 'calcView'
		include_once $conf->root_path.'/app/credit/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/credit/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'action1' :
		// zrób coś innego ...
	break;
	case 'action2' :
		// zrób coś innego ...
	break;
}