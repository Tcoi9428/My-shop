<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';
$name = (string) $_POST['name'];
$vendor_id = (int) $_POST['vendor_id'];
$delete_id = (int) $_POST['delete_id'];
if($vendor_id) {
    $query = "UPDATE vendors SET name = '$name' WHERE id = '$vendor_id'";
    $result = mysqli_query($connect, $query);
    check_mysqli_query_errors($connect);
}
    else{
            $query = "INSERT INTO vendors (name) VALUES ('$name')";
            $result = mysqli_query($connect , $query);
            check_mysqli_query_errors($connect);
}
if($delete_id){
    $query = "DELETE FROM vendors WHERE id = '$delete_id'";
    $result = mysqli_query($connect , $query);
    check_mysqli_query_errors($connect);
}

header('Location:/vendors');