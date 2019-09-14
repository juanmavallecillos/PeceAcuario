<?php

function add($connection, $productAdd, $productId, $quantityAdd, $priceAdd){
        if(!isset( $_SESSION['carrito'][$productAdd])){
            $producto = array(
                "imagen" => getImage($connection, $productId),
                "producto" => $productAdd,
                "productoId" => $productId,
                "cantidad" => $quantityAdd,
                "precio" => $priceAdd,
            );
            $_SESSION['carrito'][$productAdd] = $producto;

        }
        else{
            $_SESSION['carrito'][$productAdd]["cantidad"] = $_SESSION['carrito'][$productAdd]["cantidad"] + $quantityAdd ;
        }
        $_SESSION['precio_total'] = $_SESSION['precio_total'] + ($priceAdd * $quantityAdd);
        $_SESSION['numero_items'] = $_SESSION['numero_items'] + $quantityAdd;

}

function getImage($connection, $product_ID){
    try{
        $sql = "SELECT Producto_Imagen FROM Producto WHERE Producto_ID = :producto_ID";
        $consulta = $connection->prepare($sql);
        $consulta->execute(
            [
                'producto_ID' => $product_ID
            ]
        );
        $producto = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return ($producto[0]['Producto_Imagen']);
}