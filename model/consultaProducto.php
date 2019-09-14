<?php
function consultaProducto($connection, $producto_ID){
    try{
        $sql = "SELECT * FROM Producto WHERE Producto_ID = :producto_ID";
        $consulta = $connection->prepare($sql);
        $consulta->execute(
            [
                'producto_ID' => $producto_ID
            ]
        );
        $producto = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return ($producto);
}
