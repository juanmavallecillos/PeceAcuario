<?php

$filesAbsolutePath = '/home/TDIW/tdiw-i2/public_html/users/';
$filesPublicPath = '/users/';
session_start();

require_once __DIR__ . '/model/accesBD.php';

$accion = $_GET['accion'] ?? null;
$categoria_ID = $_GET['id'] ?? null;
$prod_ID = $_GET['prod'] ?? null;



switch ($accion){
    case 'login':
        include __DIR__.'/controller/login.php';
        break;
    case 'logout':
        session_unset();
        session_destroy();
        $accion = '';
        include __DIR__.'/controller/portada.php';
    case 'categoria':
        include __DIR__.'/controller/categoria.php';
        break;
    case 'producto':
        include __DIR__.'/controller/producto.php';
        break;
    case 'start-sesion':
        include __DIR__.'/controller/start-sesion.php';
        break;
    case 'registro':
        include __DIR__.'/controller/register.php';
        break;
    case 'carrito':
        include __DIR__.'/controller/carrito.php';
        break;
    case 'compras':
        include __DIR__.'/controller/miscompras.php';
        break;
    case 'confirmar':
        include __DIR__.'/controller/confirmar.php';
        break;
    case 'vaciar':
        include __DIR__.'/controller/vaciarCarrito.php';
        break;
    case 'add':
        include __DIR__.'/controller/add.php';
        break;
    case 'modificarDatos':
        include __DIR__.'/controller/modificarDatos.php';
        break;
    case 'buscar':
        include __DIR__.'/controller/buscar.php';
        break;
    case 'nosotros':
        include __DIR__.'/controller/nosotros.php';
        break;
    case 'contactanos':
        include __DIR__.'/controller/contactanos.php';
        break;
    default:
        include __DIR__.'/controller/portada.php';
        break;
}
