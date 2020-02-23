<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';

$query = "SELECT * FROM categories";
$categories = DataBase()->fetchAll($query);

smarty()->assign_by_ref('categories', $categories);
smarty()->assign_by_ref('h1',$h1);
smarty()->display('categories/index.tpl');