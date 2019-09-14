<div class="contenido">
    <div class="items">
        <div class="test">
            <?php foreach($prod as $p){ ?>
                <div class="item" id="item_<?php echo $p['Producto_ID']?>" style="order: <?php echo $p['Producto_ID'] ?>; flex-grow: 0">
                    <h1 id="nombre"><?php echo $p['Producto_nombre']; ?></h1>
                    <img src="/view/img/<?php echo strtolower($p['Producto_Imagen']); ?>" width="100%" alt="">
                    <h2>Descripción del producto:</h2>
                    <?php
                    $descripcion = htmlentities($p['Producto_descripcion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
                    ?>
                    <p><?php echo $descripcion ?></p>
                    <script>
                        mostrarProducto(<?php echo $p['Producto_ID'] ?>)
                    </script>
                </div>
            <?php }?>
        </div>
    </div>
</div>
