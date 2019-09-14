<?php
require_once __DIR__ . '/../model/login.php';

$connection = connectBD();
$mail = $_REQUEST['mail'];
$pass = $_REQUEST['pass'];

if (filter_var($mail,FILTER_VALIDATE_EMAIL)){
    if (login($connection,$pass,$mail)) {
        $accion = '';
        require_once __DIR__ . '/../view/php/portada.php';
    }
    else {
        require_once __DIR__ . '/../view/php/error.php';
    }
}