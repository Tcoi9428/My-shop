<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';
$category_id = $_GET['category_id'];
$query = "SELECT * FROM categories";
$result = mysqli_query($connect, $query);

$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

$smarty->assign_by_ref('categories', $categories);
$smarty->assign_by_ref('category_id', $category_id);
$smarty->assign_by_ref('h1', $h1);
$smarty->display('categories/edit.tpl');
