<?php
define('APP_DIR' , __DIR__ . "/../" );

require_once APP_DIR . '/libs/Smarty/libs/Smarty.class.php';
require_once APP_DIR . '/App/Db/Functions.php';
$config = require_once APP_DIR . '/config/config.php';
$h1 = 'Интернет магазин техники';

$smarty = new Smarty();

$smarty->template_dir = $config['template']['template_dir'];
$smarty->cache_dir = $config['template']['cache_dir'];
$smarty->compile_dir = $config['template']['compile_dir'];
$connect = mysqli_connect($config['db']['host'] , $config['db']['user'] , $config['db']['password'] , $config['db']['db_name']);
mysqli_set_charset($connect, 'utf8');