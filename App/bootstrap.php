<?php
define('APP_DIR' , __DIR__ . "/../" );

require_once APP_DIR . '/libs/Smarty/libs/Smarty.class.php';
require_once APP_DIR . '/App/Db/Functions.php';
require_once APP_DIR . '/App/Db/MySql.php';
$config = require_once APP_DIR . '/config/config.php';
$h1 = 'Интернет магазин техники';

$smarty = new Smarty();

$smarty->template_dir = $config['template']['template_dir'];
$smarty->cache_dir = $config['template']['cache_dir'];
$smarty->compile_dir = $config['template']['compile_dir'];

$mysql = new \App\Db\MySql();
$connect = $mysql->connect($config['db']['host'],$config['db']['user']  , $config['db']['password'] , $config['db']['db_name']);

