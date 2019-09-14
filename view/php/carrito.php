<head>
    <title>Carrito - PeceAcuario</title>
</head>

<?php require_once __DIR__.'/header.php';
foreach($_SESSION['carrito'] as $fila){ ?>
        <div class="itemresume">
            <h1><?php echo $fila['producto'] ?></h1>
            <img src="/view/img/<?php echo strtolower($fila['imagen']); ?>" alt="">
            <p><?php echo "cantidad: " . $fila['cantidad'] ?></p>
            <p><?php echo  "precio: " . $fila['precio']*$fila['cantidad'] . "€" ?></p>
            <form name="modifyProduct" action="/?accion=carrito" method="post">
                <input type="hidden" id="productName" name="productName" value="<?php echo $fila["producto"] ?>">
                <input id="modifyQuantity" name="modifyQuantity" min="1" type="number" value="1" style="width: 50px;">
                <input type="submit" value="Modificar cantidad" >
            </form>
            <form name="deleteProduct" action="/?accion=carrito" method="post">
                <input type="hidden" id="productName" name="productName" value="<?php echo $fila["producto"] ?>">
                <input type="hidden" id="productDelete" name="productDelete" value="delete">
                <input type="submit" value="Eliminar del carrito" >
            </form>
        </div>
    <?php } ?>
    <?php if(!empty($_SESSION['carrito'])) : ?>
    <a href="/?accion=vaciar"><div class="compra">Vaciar carrito</div></a>
    <a href="/?accion=confirmar"><div class="compra">Completar Compra <?php echo $_SESSION['precio_total']."€" ?></div></a>
    <?php else: ?>
    <p>Tu carrito actualmente esta vacío</p>
    <?php endif; ?>

<?php require_once __DIR__.'/footer.php' ?>