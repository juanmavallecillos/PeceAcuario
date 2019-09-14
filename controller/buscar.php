<?php

require_once __DIR__ . '/../model/buscar.php';
$connection = connectBD();
$buscar = $_REQUEST['buscar'];
$prod = buscarProducto($connection, $buscar);
require_once __DIR__ . '/../view/php/header.php';
require_once __DIR__ . '/../view/php/buscar.php';
require_once __DIR__ . '/../view/php/footer.php';