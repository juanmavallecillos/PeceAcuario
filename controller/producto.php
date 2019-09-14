<?php

require_once __DIR__ . '/../model/consultaProducto.php';
$connection = connectBD();
$prod = consultaProducto($connection, $categoria_ID);
require_once __DIR__ . '/../view/php/producto.php';

