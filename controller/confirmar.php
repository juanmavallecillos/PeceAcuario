<?php
require_once __DIR__ . '/../model/crearFactura.php';
$connection = connectBD();
$cantidad = $_SESSION['numero_items'];
$precio = $_SESSION['precio_total'];
$fecha = date('Y-m-d H:i:s');
$email = $_SESSION['usermail'];
$factura = crearFactura($connection,$cantidad,$precio,$fecha,$email);
foreach($_SESSION['carrito'] as $fila){
    $precio = $fila['precio']*$fila['cantidad'];
    crearLineaCompra($connection,$factura,$fila['productoId'], $fila['cantidad'], $precio);
}
$_SESSION['carrito'] = [];
$_SESSION['numero_items'] = 0;
$_SESSION['precio_total'] = 0;
include __DIR__ . '/../view/php/confirmar.php';