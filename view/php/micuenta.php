<?php

require_once __DIR__.'/header.php'; ?>

<div class="contenedor">
    Mi perfil </br></br>
    Mi Nombre: <?php echo $datosCliente[0]['Usuario_nombre'] ?> </br></br>
    <img src="<?php echo $filesPublicPath.$_SESSION['userimage'] ?>"> </br></br>
    Mi e-mail: <?php echo $_SESSION['usermail']; ?> </br></br>
    Mi dirección: <?php echo $datosCliente[0]['Usuario_direccion']?> </br></br>
    Mi Población: <?php echo $datosCliente[0]['Usuario_direccion']?> </br></br>
    Mi Código Postal: <?php echo $datosCliente[0]['Usuario_CP']?> </br></br>

</div>

<div class="contenedor">

    <form class="cuenta" name="modificarDatos" id="registro" onsubmit="return validar_cambio(this)" action="/?accion=modificarDatos" method="post" enctype="multipart/form-data">
        Modificar mis datos
        <br/>Nombre<br/>
        <input value="<?php echo $datosCliente[0]['Usuario_nombre'] ?>" type="text" name="name" maxlength="30" required ><br/><br/>
        Contraseña nueva(en caso de querer cabmiarla)</br>
        <input type="password" name="passNew" maxlength="30"><br/><br/>
        Repetir nueva contraseña</br>
        <input type="password" name="passNewConfirmacion" maxlength="30"><br/><br/>
        Dirección<br/>
        <input value="<?php echo $datosCliente[0]['Usuario_direccion']?>" type="text" name="dir" maxlength="30" required ><br/><br/>
        Población<br/>
        <input value="<?php echo $datosCliente[0]['Usuario_poblacion']?>" type="text" name="city" maxlength="30" required ><br/><br/>
        Código Postal<br/>
        <input value="<?php echo $datosCliente[0]['Usuario_CP']?>" type="number" name="cp" id="cp" required><br/><br/>
        Imagen de perfil<br/>
        <input type="file" name="profile_image">
        <input type="submit" value="Cambiar mis datos">
    </form>


</div>

<?php require_once __DIR__.'/footer.php' ?>
