<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';
$name = (string)$_POST['name'];
$category_id = (int)$_POST['category_id'];
$delete_id = (int)$_POST['delete_id'];
if ($category_id) {
    $query = "UPDATE categories SET name = '$name' WHERE id = '$category_id'";
    $result = DataBase()->query($query);
} elseif ($delete_id) {
    $query = "DELETE FROM categories WHERE id = '$delete_id'";
    $result = DataBase()->query($query);
} else {
    $query = "INSERT INTO categories (name) VALUES ('$name')";
    $result = DataBase()->query($query);
}
header('Location:/categories');