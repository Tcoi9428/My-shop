<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';

$product_id = (int) $_GET['product_id'];

$query = " SELECT * FROM products JOIN products_categories WHERE products.id=products_categories.product_id AND products.id=$product_id";
$result = mysqli_query($connect , $query);
check_mysqli_query_errors($connect);
$product = mysqli_fetch_all($result , MYSQLI_ASSOC);

$query = "SELECT * FROM vendors";
$result = mysqli_query($connect, $query);
check_mysqli_query_errors($connect);
$vendors = mysqli_fetch_all($result ,MYSQLI_ASSOC);

$query = "SELECT * FROM categories";
$result = mysqli_query($connect, $query);
check_mysqli_query_errors($connect);
$categories = mysqli_fetch_all($result ,MYSQLI_ASSOC);
/*
$query = "SELECT * FROM products_categories WHERE product_id='$product_id'";
$result = mysqli_query($connect , $query);
check_mysqli_query_errors($connect);
$product_categories = mysqli_fetch_all($result , MYSQLI_ASSOC);*/


$smarty->assign_by_ref('categories',$categories);
$smarty->assign_by_ref('product_categories',$product_categories);
$smarty->assign_by_ref('vendors', $vendors);
$smarty->assign_by_ref('product', $product);
$smarty->assign_by_ref('product_id' , $product_id);
$smarty->display('product/edit.tpl');
