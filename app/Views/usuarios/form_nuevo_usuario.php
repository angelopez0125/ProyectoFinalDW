<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Usuario</title>
</head>
<body>
    <h1>Nuevo Usuario</h1>
    <form action="<?=base_url('guardarUsuario')?>" method="get">
        <label for="txtCodigo">DPI:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese Código">
        <br>
        <label for="txtUsuario">Usuario:</label>
        <input type="text" name="txtUsuario" placeholder="Ingrese Usuario">
        <br>
        <label for="txtContra">Contraseña:</label>
        <input type="text" name="txtContra" placeholder="Ingrese Contraseña">
        <br>
        <label for="txtTipo">Tipo de Usuario:</label>
        <input type="text" name="txtTipo" placeholder="Ingrese Tipo de Usuario">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>