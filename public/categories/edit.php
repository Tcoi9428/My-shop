<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';
$category_id = $_GET['category_id'];
$query = "SELECT * FROM categories";
$categories = DataBase()->fetchAll($query);

smarty()->assign_by_ref('categories', $categories);
smarty()->assign_by_ref('category_id', $category_id);
smarty()->assign_by_ref('h1', $h1);
smarty()->display('categories/edit.tpl');
