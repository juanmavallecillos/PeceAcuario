<head>
    <title>Inicio - PeceAcuario</title>
</head>

<?php require_once __DIR__.'/header.php';
require_once('/home/TDIW/tdiw-i2/public_html/controller/portada.php')?>
    <div class="contenido">
        <div class="items">
            <div class="test">
                <?php foreach($categorias as $categoria){ ?>
                    <div class="item"  id="item_<?php echo $categoria['Categoria_ID']?>" style="order: <?php echo $categoria['Categoria_ID'] ?>; flex-grow: 0">
                        <h3><?php echo $categoria['Categoria_nombre']; ?></h3>
                        <img src="/view/img/<?php echo strtolower($categoria['Categoria_nombre']); ?>.png" width="100%" alt="">
                        <script>
                            mostrarCategoria(<?php echo $categoria['Categoria_ID'] ?>)
                        </script>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
<?php require_once __DIR__.'/footer.php' ?>

