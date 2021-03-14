<?php
require_once dirname(__FILE__).'/config.php';


include _ROOT_PATH.'/app/credit_calc.php';

function out(&$param){
	if (isset($param)){
		echo $param;
	}
}