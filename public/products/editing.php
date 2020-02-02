<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/../App/bootstrap.php';
$delete_id = (int) $_POST['delete_id'];
$name = (string) $_POST['name'];
$price = (float) $_POST['price'];
$amount = (int) $_POST['amount'];
$description = (string) $_POST['description'];
$vendor_id = (int) $_POST['vendor_id'];

if ($name && $price  && $amount && $vendor_id)
{
    $query = "INSERT INTO products (name , price , amount , description , vendor_id) VALUES  ('$name','$price','$amount','$description','$vendor_id')";
    $result = mysqli_query($connect , $query);
    check_mysqli_query_errors($connect);
}

$query = "SELECT id FROM products";
$result = mysqli_query($connect , $query);
$products_ids = mysqli_fetch_all($result ,MYSQLI_ASSOC);
check_mysqli_query_errors($connect);

$product_id = end($products_ids);
$product_id = (int) implode('',$product_id);


$categories_ids = $_POST['categories_ids'];

$data = [];
foreach ($categories_ids as $categories_id)
{
    $data[] = "($product_id , $categories_id)";
}
if(!empty($data))
{
    $data = implode(',' , $data);
    $categories_query = "INSERT INTO products_categories (product_id , category_id) VALUES $data";
    $categories_result = mysqli_query($connect , $categories_query);
    check_mysqli_query_errors($connect);
}

if($delete_id)
{
    $query = "DELETE FROM products WHERE id = '$delete_id'";
    $result = mysqli_query($connect , $query);
    check_mysqli_query_errors($connect);

    $query = "DELETE FROM products_categories WHERE product_id = '$delete_id'";
    $result =mysqli_query($connect , $query);
    check_mysqli_query_errors($connect);
}
header('Location: /');
//echo '<pre>'; var_dump($_POST); echo '</pre>';
//echo '<pre>'; var_dump($categories_ids); echo '</pre>';
//echo '<pre>'; var_dump($products_id); echo '</pre>';