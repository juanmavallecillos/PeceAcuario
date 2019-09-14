<?php

function buscarProducto($connection, $buscar){
    try{
        $sql = "SELECT * FROM Producto WHERE Producto_descripcion LIKE '%$buscar%' OR Producto_nombre LIKE '%$buscar%'";
        $consulta = $connection->prepare($sql);
        $consulta->execute();
        $producto = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return ($producto);
}