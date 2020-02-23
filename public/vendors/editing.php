<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';
$name = (string) $_POST['name'];
$vendor_id = (int) $_POST['vendor_id'];
$delete_id = (int) $_POST['delete_id'];
if($vendor_id) {
    $query = "UPDATE vendors SET name = '$name' WHERE id = '$vendor_id'";
    $result = DataBase()->query($query);
}
elseif ($delete_id){
    $query = "DELETE FROM vendors WHERE id = '$delete_id'";
    $result = DataBase()->query($query);
}
else{
    $query = "INSERT INTO vendors (name) VALUES ('$name')";
    $result = DataBase()->query($query);
}


header('Location:/vendors');