<?php
function login($connection,$password,$mail) {
    $valid = false;
    try{
        $sql = 'SELECT Usuario_nombre, Usuario_email, Usuario_contrasena, Usuario_imagen FROM Usuario WHERE Usuario_email = :mail';
        $consulta = $connection->prepare($sql);
        $consulta->execute(
            [
                'mail' => $mail
            ]
        );
        $userlogged = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    if ($userlogged != null){
        $user = reset($userlogged);
        $hash = $user['Usuario_contrasena'];
        if (password_verify($password,$hash)){
            $_SESSION['username'] = $user['Usuario_nombre'];
            $_SESSION['usermail'] = $user['Usuario_email'];
            $_SESSION['userimage'] = $user['Usuario_imagen'];
            $_SESSION['carrito'] = [];
            $_SESSION['numero_items'] = 0;
            $_SESSION['precio_total'] = 0;
            $valid = true;
        }
    }
    return $valid;
}