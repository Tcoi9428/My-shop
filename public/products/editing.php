<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';
$product_id = (int) $_POST['product_id'];
$name = (string) $_POST['name'];
$price = (float) $_POST['price'];
$amount = (int) $_POST['amount'];
$description = (string) $_POST['description'];
$vendor_id = (int) $_POST['vendor_id'];
$categories_ids = (array) $_POST['categories_ids'];

if ($name && $price && $amount && $vendor_id && !$product_id) {
    $query =
        "INSERT INTO products (name , price , amount , description , vendor_id) VALUES('$name',$price,$amount,'$description',$vendor_id)";
    mysqli_query($connect, $query);
    check_mysqli_query_errors($connect);
}
elseif ($product_id){
    $query = "DELETE FROM products_categories WHERE product_id=$product_id";
    mysqli_query($connect , $query);
    check_mysqli_query_errors($connect);

    $query = "DELETE FROM products WHERE id=$product_id";
    mysqli_query($connect, $query);
    check_mysqli_query_errors($connect);
}
else{
    $query = "UPDATE products SET name = '$name', price = $price , amount = $amount , description = '$description', vendor_id = $vendor_id WHERE id = $product_id";
    mysqli_query($connect , $query);
    check_mysqli_query_errors($connect);
}

if (!$product_id) {
    $product_id = mysqli_insert_id($connect);
}

$categories = [];
foreach ($categories_ids as $category_id) {
    $categories[] = "($product_id, $category_id)";
}
if (!empty($categories)) {
    $categories = implode(',', $categories);

    $query = "INSERT INTO products_categories(product_id, category_id) VALUES $categories";
    mysqli_query($connect, $query);

    check_mysqli_query_errors($connect);
}
header('Location: /');