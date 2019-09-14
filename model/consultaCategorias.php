<?php
function consultaCategorias($connection){
    try{
        $sql = 'SELECT Categoria_nombre, Categoria_ID FROM Categoria';
        $consulta = $connection->prepare($sql);
        $consulta->execute();
        $categorias = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){echo"Error: " . $e->getMessage();}
    return ($categorias);
}
