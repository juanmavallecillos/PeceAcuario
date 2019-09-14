<head>
    <title>Mis Compras - PeceAcuario</title>
</head>

<?php require_once __DIR__.'/header.php';

?>

<div class="compras">
    <?php
    foreach($facturas as $factura){ ?>
        <br><br><b>Pedido realizado el <?php echo $factura['Factura_fecha'] ?></b>
        <hr>
        <table border="1px">
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
            <?php foreach($lineas[$factura['Factura_ID']] as $linea) { ?>
            <tr>
                <td><?php echo $linea['Producto_nombre'] ?></td>
                <td><?php echo $linea['LC_cantidad'] ?></td>
                <td><?php echo $linea['LC_precio']."€" ?></td>
            </tr>
            <?php } ?>
        </table>
        <p>Total: <?php echo $factura['Factura_cantidad']." producto/s por ".$factura['Factura_precio']."€" ?></p>
        <hr>

    <?php } ?>
</div>


<?php
require_once __DIR__.'/footer.php';