<?php
function crearFactura($connection,$cantidad,$precio,$fecha,$email){

    $sql = "INSERT INTO Factura (Factura_cantidad, Factura_precio, Factura_fecha, Factura_email) 
  			  VALUES(:cantidad, :precio,:fecha,:email)";
    $consulta = $connection->prepare($sql);
    $consulta->execute(
        [
            'cantidad' => $cantidad,
            'precio' => $precio,
            'fecha' => $fecha,
            'email' => $email
        ]
    );

    $sql = "SELECT MAX(Factura_ID) AS MAXID FROM Factura WHERE Factura_email = :mail";
    $consulta = $connection->prepare($sql);
    $consulta->execute(
        [
            'mail' => $email
        ]
    );
    $idFactura = $consulta->fetchAll(PDO::FETCH_ASSOC);
    return $idFactura['0']['MAXID'];
}

function crearLineaCompra($connection, $factura, $prodId, $prodCantidad, $lineaPrecio){
    $sql = "INSERT INTO Linea_Compra (LC_Factura_ID, LC_Producto_ID, LC_cantidad, LC_precio) 
  			  VALUES(:factura, :prod,:cantidad,:precio)";
    $consulta = $connection->prepare($sql);
    $consulta->execute(
        [
            'factura' => $factura,
            'prod' => $prodId,
            'cantidad' => $prodCantidad,
            'precio' => $lineaPrecio
        ]
    );
}