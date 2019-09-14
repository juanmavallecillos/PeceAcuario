<?php

function updateUserData($connection, $name, $cp, $city, $dir, $mail){
    $sql = "UPDATE Usuario
    SET Usuario_nombre='$name', Usuario_cp='$cp', Usuario_direccion='$dir', Usuario_poblacion='$city'
    WHERE Usuario_email = '$mail' ";
    $connection->query($sql);
    $_SESSION['username'] = $name;
}

function updateUserPassword($connection,$name, $cp, $city, $dir, $mail, $passwd){
    updateUserData($connection,$name,$cp,$city,$dir,$mail);
    $passhashed = password_hash($passwd, PASSWORD_DEFAULT);
    $sql = "UPDATE Usuario
    SET Usuario_contrasena = '$passhashed'
    WHERE Usuario_email = '$mail' ";
    $connection->query($sql);
}

function updateUserImage($connection, $mail,$path){
    print_r($_FILES);
    $filename = $_FILES['profile_image']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $newName = $mail .".". $ext;
    move_uploaded_file($_FILES['profile_image']['tmp_name'], $path .$newName);
    $sql = "UPDATE Usuario
    SET Usuario_imagen = '$newName'
    WHERE Usuario_email = '$mail' ";
    $connection->query($sql);

}

function getUserImage($connection, $mail){
    try{
        $sql = "SELECT Usuario_imagen FROM Usuario WHERE Usuario_email = :Usuario_email";
        $consulta = $connection->prepare($sql);
        $consulta->execute(
            [
                'Usuario_email' => $mail
            ]
        );
        $imagen = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return ($imagen);
}