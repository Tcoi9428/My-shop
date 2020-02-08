<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';

$query = "SELECT * FROM categories";
$result = mysqli_query($connect , $query);
check_mysqli_query_errors($connect);
$categories = mysqli_fetch_all($result , MYSQLI_ASSOC);

$smarty->assign_by_ref('categories', $categories);
$smarty->assign_by_ref('h1',$h1);
$smarty->display('categories/index.tpl');