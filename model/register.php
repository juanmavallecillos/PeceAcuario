<?php
function registerUser($connection,$name,$mail,$pass,$dir,$city,$cp){
    $name = (filter_var($name,FILTER_SANITIZE_SPECIAL_CHARS));
    $passhashed=password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO Usuario (Usuario_nombre, Usuario_email, Usuario_contrasena,Usuario_direccion,Usuario_poblacion,Usuario_CP) 
  			  VALUES(:name, :mail,:passhashed,:dir,:city,:cp)";
    $consulta = $connection->prepare($sql);
    $consulta->execute(
        [
            'name' => $name,
            'mail' => $mail,
            'passhashed' => $passhashed,
            'dir' => $dir,
            'city' => $city,
            'cp' => $cp
        ]
    );

}

function checkUserNotRegistered($connection, $mail){
    try{
        $sql = 'SELECT Usuario_email FROM Usuario WHERE Usuario_email = :mail';
        $consulta = $connection->prepare($sql);
        $consulta->execute(
            [
                'mail' => $mail
            ]
        );
        $userlogged = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    if ($userlogged==null){
        return true;
    }
    else{
        return false;
    }

}

function getUserData($connection, $mail){
    try{
        $sql = 'SELECT Usuario_nombre, Usuario_direccion, Usuario_poblacion, Usuario_CP FROM Usuario WHERE Usuario_email = :mail';
        $consulta = $connection->prepare($sql);
        $consulta->execute(
            [
                'mail' => $mail
            ]
        );
        $userlogged = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return $userlogged;
}
?>