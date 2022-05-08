<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inicio de sesión</title>
</head>

<body>
    <h1>Inicio de sesión</h1>
    <form action="<?=base_url('listar_sesion')?>" method="post">
        <label for="txtUsuario">Usuario</label>
        <input type="text" name="txtUsuario" id="txtUsuario">
        <label for="txtContra">Contraseña</label>
        <input type="password" name="txtContra" id="txtContra">
        <input type="submit" value="Iniciar Sesión" name="btnIniciar">
    </form>
    

    
</body>

</html>