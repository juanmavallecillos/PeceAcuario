<head>
    <title>Mi cuenta - PeceAcuario</title>
</head>
<?php require __DIR__.'/header.php'; ?>
<div class="contenido">
    <section>
        <div id="contenedor" class="items">
            <div class="contenedor">
                <span>Entra con tu cuenta</span>
                <form class="cuenta" action="/?accion=start-sesion" method="post">
                    <br/>Email<br/>
                    <input type="email" name="mail" placeholder="user@domain" required><br/><br/>
                    Contraseña<br/>
                    <input type="password" name="pass" required><br/><br/>
                    <input type="submit" value="Entrar">
                </form>
            </div>
            <div class="contenedor">
                <span>Regístrate</span>
                <form class="cuenta" name="registro" id="registro" onsubmit="return validar_registro(this)" action="/?accion=registro" method="post">
                    <br/>Nombre<br/>
                    <input type="text" name="name" maxlength="30" required ><br/><br/>
                    Email<br/>
                    <input type="email" name="mail" id="mailReg" maxlength="30" required ><br/><br/>
                    Contraseña<br/>
                    <input type="password" name="pass" maxlength="30" required ><br/><br/>
                    Dirección<br/>
                    <input type="text" name="dir" maxlength="30" required ><br/><br/>
                    Población<br/>
                    <input type="text" name="city" maxlength="30" required ><br/><br/>
                    Código Postal<br/>
                    <input type="number" name="cp" id="cp" required><br/><br/>
                    <input type="submit" value="Registrarse">
                </form>
            </div>
        </div>
    </section>
</div>
<?php require __DIR__.'/footer.php' ?>