<?php
require_once __DIR__ . '/../model/modificarDatos.php';

$connection = connectBD();
$name = $_REQUEST['name'];
$passNew = $_REQUEST['passNew'];
$passNewConfirmacion = $_REQUEST['passNewConfirmacion'];
$city = $_REQUEST['city'];
$dir = $_REQUEST['dir'];
$cp = $_REQUEST['cp'];

//$imagen = getUserImage($connection,$_SESSION['usermail']);

if ( (isset($_FILES['profile_image'])) && (!empty($_FILES['profile_image'])) ){
    updateUserImage($connection,$_SESSION['usermail'],$filesAbsolutePath);
}


if ( ($passNew == $passNewConfirmacion) && ($passNew!= "") ){
    updateUserPassword($connection,$name,$cp,$city,$dir,$_SESSION['usermail'],$passNew);
}
else{
    updateUserData($connection, $name, $cp, $city, $dir, $_SESSION['usermail']);
}

require_once(__DIR__ . "/../view/php/portada.php");


