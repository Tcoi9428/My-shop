<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';

$query = "SELECT * FROM products";
$result = mysqli_query($connect , $query);
$products = mysqli_fetch_all($result , MYSQLI_ASSOC);

$vendor_query = "SELECT * FROM vendors";
$vendor_result = mysqli_query($connect , $vendor_query);
$vendors = mysqli_fetch_all($vendor_result , MYSQLI_ASSOC);

$category_query = "SELECT ct.id , pd.id , ct.name , pdct.product_id , pdct.category_id   FROM categories AS ct , products AS pd , products_categories AS pdct WHERE pd.id = pdct.product_id AND ct.id = pdct.category_id ";
$category_result = mysqli_query($connect , $category_query);
$categories = mysqli_fetch_all($category_result ,MYSQLI_ASSOC);

$smarty->assign_by_ref('vendors',$vendors);
$smarty->assign_by_ref('products', $products);
$smarty->assign_by_ref('categories',$categories);
$smarty->assign_by_ref('h1',$h1);
$smarty->display('index.tpl');