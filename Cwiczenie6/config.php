<?php

require_once 'Config.class.php';

$conf = new Config();

$conf->server_name = 'localhost';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/php_cw/Cwiczenie5';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->root_path = dirname(__FILE__);

//define('_SERVER_NAME', 'localhost');
//define('_SERVER_URL', 'http://'._SERVER_NAME);
//define('_APP_ROOT', '/php_cw/Cwiczenie5');
//define('_APP_URL', _SERVER_URL._APP_ROOT);
//define("_ROOT_PATH", dirname(__FILE__));