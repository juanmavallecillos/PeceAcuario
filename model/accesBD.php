<?php
function connectBD()
{
    $servidor = "localhost";
    $user = "user";
    $pass = "passwd";
    try {
        $conn = new PDO("mysql:host=$servidor;dbname=db;port=3306;charset=utf8mb4",
            $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){ echo "Error: " . $e->getMessage(); }
    return($conn);
}
?>