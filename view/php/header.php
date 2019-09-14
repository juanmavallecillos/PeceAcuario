<!DOCTYPE html>
<html lang="es" >
<head>
    <meta charset="UTF-8">
    <title>PeceAcuario</title>
    <link rel="stylesheet" type="text/css" href="/view/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="/view/js/functions.js"></script>
</head>
<body>
    <div class="grid">
        <div class="back">
            <div class="barraSuperior">
                <header id="cabecera">
                    <a href="/?accion=portada"><h1><span class="resaltar">P</span>ece<span class="resaltar">A</span>cuario</h1></a>
                    <div id="topRight">
                        <div id="cuenta">
                            <?php if(isset($_SESSION['username'])) { ?>
                                <ul class="cuenta">
                                    <li><?php echo $_SESSION['username'] ?>
                                        <ul>
                                            <li><a href="/?accion=registro">Mi cuenta</a></li>
                                            <li><a href="/?accion=compras">Mis compras</a></li>
                                            <li><a href="/?accion=logout">Cerrar sesión</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            <?php }
                            else { ?>
                                <ul class="cuenta">
                                    <li>Mi cuenta
                                        <ul>
                                            <li><a href="/?accion=login">Iniciar sesión</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            <?php }
                            ?>
                        </div>
                        <div id="carrito">
                            <?php /*print_r($_SESSION); */?>
                            <?php if(isset($_SESSION['username'])): ?>
                            <a href="/?accion=carrito">
                                <?php else: ?>
                                <a href="/?accion=login">
                                    <?php endif ?>
                                    <?php
                                    if(isset($_SESSION['username'])){ ?>
                                        <div class="actCarrito"><?php
                                        echo "Carrito (".$_SESSION['numero_items'].")";
                                        if($_SESSION['precio_total'] != 0){
                                            echo " - ".$_SESSION['precio_total']."€";
                                        }?>
                                        </div><?php
                                    }
                                    else{
                                        echo "Carrito (0)";
                                    }?>
                                </a>
                        </div>

                    </div>
                </header>
            </div>

            <div class="menuNav">
                <section id="barra">
                    <nav>
                        <div class="topnav">
                            <ul>
                                <li><a <?php if($accion == '' || $accion == 'portada'){echo 'id="actual"';} ?> href="/?accion=portada">Inicio</a></li>
                                <li><a <?php if($accion == 'nosotros'){echo 'id="actual"';} ?> href="/?accion=nosotros">Nosotros</a></li>
                                <li><a <?php if($accion == 'contactanos'){echo 'id="actual"';} ?> href="/?accion=contactanos">Contáctanos</a></li>
                                <div class="search">
                                    <form class="search" action="/?accion=buscar" method="post">
                                        <input type="text" placeholder="Buscar..." name="buscar">
                                        <input type="submit" value="Buscar">
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </nav>
                </section>
            </div>
        </div>
