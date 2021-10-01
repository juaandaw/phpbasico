<form action="<?= $_SERVER['PHP_SELF']?>" METHOD="post">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"
               <?php mostrarCampo($_POST['nombre']);?>
               placeholder="Introduce tu nombre">
        <?php mostrar_error_campo('nombre', $errores); ?>
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email" <?php mostrarCampo($_POST['email']); ?> >
        <?php mostrar_error_campo('email',$errores); ?>
    </p>
    <p>
        <label for="clave1">Contraseña</label>
        <input type="password" name="clave1">
        <?php mostrar_error_campo('clave1',$errores); ?>
    </p>
    <p>
        <label for="clave2">Repetir Contraseña</label>
        <input type="password" name="clave2">
        <?php mostrar_error_campo('clave2',$errores); ?>
    </p>
    <p>
        <label>
            <input type="submit" value="Enviar">
        </label>
    </p>
</form>