<?php
if (isset($_SESSION['username'])){
    if( isset($_REQUEST['modifyQuantity']) && isset($_REQUEST['productName'])){
        $quantity = $_REQUEST['modifyQuantity'];
        $name = $_REQUEST['productName'];
        $diferencia = $quantity - $_SESSION['carrito'][$name]['cantidad'];
        $_SESSION['carrito'][$name]['cantidad']=$quantity;
        $_SESSION['precio_total'] = $_SESSION['precio_total'] + ($_SESSION['carrito'][$name]['precio'] * $diferencia);
        $_SESSION['numero_items'] = $_SESSION['numero_items'] +  $diferencia;
    };
    if(isset($_REQUEST['productDelete'])){
        $name = $_REQUEST['productName'];
        $cantidad = $_SESSION['carrito'][$name]['cantidad'];
        $_SESSION['numero_items'] = $_SESSION['numero_items'] -  $cantidad;
        $_SESSION['precio_total'] = $_SESSION['precio_total'] - ($_SESSION['carrito'][$name]['precio'] * $cantidad);
        unset($_SESSION['carrito'][$name]);
    }

    include __DIR__ . '/../view/php/carrito.php';
}
else {
    include __DIR__ . '/../view/php/portada.php';
}
?>