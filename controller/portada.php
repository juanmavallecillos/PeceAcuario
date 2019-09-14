<?php

require_once __DIR__ . '/../model/accesBD.php';
require_once __DIR__ . '/../model/consultaCategorias.php';
$connection = connectBD();
$categorias = consultaCategorias($connection);
require_once __DIR__ . '/../view/php/portada.php';