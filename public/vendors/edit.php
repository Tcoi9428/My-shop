<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';
$vendor_id = $_GET['vendor_id'];
$query = "SELECT * FROM vendors";
$vendors = DataBase()->fetchAll($query);

$smarty->assign_by_ref('vendors', $vendors);
$smarty->assign_by_ref('vendor_id' ,$vendor_id);
$smarty->assign_by_ref('h1',$h1);
$smarty->display('vendors/edit.tpl');
