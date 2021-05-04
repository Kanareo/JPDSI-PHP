<?php

require_once 'init.php';

switch ($action) {
	default :
                include 'check.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
	break;
	case 'login':
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogin();
	break;
	case 'calcCompute' :
		include 'check.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
	break;
	case 'logout' : // akcja NIEPUBLICZNA
		include 'check.php';  // KONTROLA
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogout();
	break;
	case 'action1' :
		// zrób coś innego ...
	break;
	case 'action2' :
		// zrób coś innego ...
	break;
}