<?php
require_once __DIR__ . '/../model/add.php';

$productAdd = $_POST['productAdd'];
$productId = $_POST['productId'];
$quantityAdd = $_POST['quantityAdd'];
$priceAdd = $_POST['priceAdd'];

echo "<script>console.log('" . $productAdd . "')</script>";
$connection = connectBD();
add($connection, $productAdd, $productId, $quantityAdd, $priceAdd);

require_once(__DIR__ . "/../view/php/add.php");