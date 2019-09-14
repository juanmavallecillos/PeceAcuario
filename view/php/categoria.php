<?php require_once('/home/TDIW/tdiw-i2/public_html/controller/categoria.php')?>


        <?php foreach($productos as $producto){ ?>
            <div class="item"  id="item_<?php echo $producto['Producto_ID']?>" style="order: <?php echo $producto['Producto_ID'] ?>; flex-grow: 0">
                <h3><?php echo $producto['Producto_nombre']; ?></h3>
                <img src="/view/img/<?php echo strtolower($producto['Producto_Imagen']); ?>" width="100%" alt="">
                <script>
                    mostrarProducto(<?php echo $producto['Producto_ID'] ?>)
                </script>
            </div>
        <?php }?>

