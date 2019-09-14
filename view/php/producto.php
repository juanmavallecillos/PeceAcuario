    <div class="itemshow">
        <?php foreach($prod as $p){ ?>
            <h1 id="nombre"><?php echo $p['Producto_nombre']; ?></h1>
            <img src="/view/img/<?php echo strtolower($p['Producto_Imagen']); ?>" width="100%" alt="">
            <h2>Descripción del producto:</h2>
            <?php
            $descripcion = htmlentities($p['Producto_descripcion'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
            ?>
            <p><?php echo $descripcion ?></p>
            <h2>Precio: $<?php echo $p['Producto_precio']; ?></h2>

            <?php if(isset($_SESSION['username'])): ?>
            <form name="addProduct">
                <input type="hidden" id="productAdd" name="productAdd" value="<?php echo $p["Producto_nombre"] ?>">
                <input type="hidden" id="productId" name="productId" value="<?php echo $p["Producto_ID"] ?>">
                <input type="hidden" id="priceAdd" name="priceAdd" value="<?php echo $p["Producto_precio"] ?>">
                <input id="quantityAdd" name="quantityAdd" min="1" type="number" value="1" style="width: 50px;">
                <input type="button" onClick="actualizarCarrito()" id="anadirButton" value="Añadir al carrito" >
            </form>

            <?php else: ?>
                <p>Necesitas estar logueado para poder comprar</p>
            <?php endif; ?>
        <?php }?>
    </div>