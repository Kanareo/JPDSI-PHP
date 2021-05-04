<?php

require_once 'init.php';

switch ($action) {
	default : // 'calcView'
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
	case 'action1' :
		// zrób coś innego ...
	break;
	case 'action2' :
		// zrób coś innego ...
	break;
}