<?php
require_once __DIR__ . '/../model/register.php';
$connection = connectBD();


if (isset($_SESSION['username'])){
    $datosCliente = getUserData($connection,$_SESSION['usermail']);
    include __DIR__ . '/../view/php/micuenta.php';
}
else {
    $name = $_REQUEST['name'];
    $mail = $_REQUEST['mail'];
    $pass = $_REQUEST['pass'];
    $dir = $_REQUEST['dir'];
    $city = $_REQUEST['city'];
    $cp = $_REQUEST['cp'];
    if (filter_var($mail,FILTER_VALIDATE_EMAIL)){
        if (checkUserNotRegistered($connection,$mail))
        {
            registerUser($connection,$name,$mail,$pass,$dir,$city,$cp);
            $accion='';
            require_once __DIR__ . '/../view/php/portada.php';
        }
        else{
            require_once __DIR__ . '/../view/php/error.php';
        }
}

}
?>
