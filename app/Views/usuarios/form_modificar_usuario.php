<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Usuarios</title>
</head>
<body>
    <h1>Actualizar Usuario</h1>

    <form action="<?=base_url('modificarUsuario')?>" method="get">
        <label for="txtCodigo">DPI:</label>
        <input type="text" name="txtCodigo" value="<?=$usuario['dpi']?>" readonly>
        <br>
        <label for="txtUsuario">Usuario:</label>
        <input type="text" name="txtUsuario" value="<?=$usuario['usuario']?>">
        <br>
        <label for="txtContra">Contraseña:</label>
        <input type="text" name="txtContra" value="<?=$usuario['contra']?>">
        <br>
        <label for="txtTipo">Tipo de Usuario:</label>
        <input type="text" name="txtTipo" value="<?=$usuario['tipousuario_id']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>