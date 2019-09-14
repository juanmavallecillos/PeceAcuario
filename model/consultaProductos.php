<?php
function consultaProductos($connection, $categoria_ID){
    try{
        $sql = "SELECT Producto_nombre, Producto_Imagen, Producto_precio, Producto_ID FROM Producto WHERE Producto_Categoria_ID = :categoria_ID AND Producto_activo = 1";
        $consulta = $connection->prepare($sql);
        $consulta->execute(
            [
                'categoria_ID' => $categoria_ID
            ]
        );
        $producto = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return ($producto);
}
