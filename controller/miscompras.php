<?php
require_once __DIR__ . '/../model/recuperarCompras.php';
$connection = connectBD();
$facturas = recuperarFacturas($connection, $_SESSION['usermail']);
$lineas = recuperarLineas($connection, $facturas);
include __DIR__ . '/../view/php/miscompras.php';