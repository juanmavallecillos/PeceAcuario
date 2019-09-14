<?php
function recuperarFacturas($connection, $usermail){
    try{
        $sql = "SELECT * FROM Factura WHERE Factura_email = :email ORDER BY Factura_ID DESC";
        $consulta = $connection->prepare($sql);
        $consulta->execute(
            [
                'email' => $usermail
            ]
        );
        $facturas = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return ($facturas);
}

function recuperarLineas($connection, $facturas){
    $lineas = [];
    try{
        foreach($facturas as $factura){
            $sql = "SELECT LC_cantidad, LC_precio, Producto_nombre FROM Linea_Compra, Producto WHERE LC_Factura_ID = :facturaID AND LC_Producto_ID = Producto_ID";
            $consulta = $connection->prepare($sql);
            $consulta->execute(
                [
                    'facturaID' => $factura['Factura_ID']
                ]
            );
            $lineas[$factura['Factura_ID']] = $consulta->fetchAll(PDO::FETCH_ASSOC);
        }
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return ($lineas);
}