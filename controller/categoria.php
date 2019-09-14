<?php

require_once __DIR__ . '/../model/consultaProductos.php';
$connection = connectBD();
$productos = consultaProductos($connection, $categoria_ID);
require_once __DIR__ . '/../view/php/categoria.php';