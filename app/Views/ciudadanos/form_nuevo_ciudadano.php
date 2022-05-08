<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Ciudadano</title>
</head>
<body> 
    <h1>Nuevo Ciudadadano</h1> 
    <form action="<?=base_url('guardarCiudadano')?>" method="get">
        <label for="txtDpi">DPI:</label>
        <input type="text" name="txtDpi" placeholder="Ingrese Dpi">
        <br>
        <label for="txtApellido">APELLIDO:</label>
        <input type="text" name="txtApellido" placeholder="Ingrese Apellido">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        <br>
        <label for="txtDireccion">Dirección:</label>
        <input type="text" name="txtDireccion" placeholder="Ingrese Dirección">
        <br>
        <label for="txtTelCasa">Telefono Casa:</label>
        <input type="text" name="txtTelCasa" placeholder="Ingrese Telefono de Casa">
        <br>
        <label for="txtTelMovil">Telefono Móvil:</label>
        <input type="text" name="txtTelMovil" placeholder="Ingrese Telefono Móvil">
        <br>
        <label for="txtEmail">Email:</label>
        <input type="text" name="txtEmail" placeholder="Ingrese Correo Electrónico">
        <br>
        <label for="txtFechaNac">Fecha de Nacimiento:</label>
        <input type="text" name="txtFechaNac" placeholder="Ingrese Fecha de Nacimiento">
        <br>
        <label for="txtCodNivelAcad">Código Nivel Academico:</label>
        <input type="text" name="txtCodNivelAcad" placeholder="Ingrese Código de Nivel Académico">
        <br>
        <label for="txtLugarNac">Lugar Nacimiento:</label>
        <input type="text" name="txtLugarNac" placeholder="Ingrese Lugar de Nacimiento">
        <br>
        <label for="txtContra">Contraseña:</label>
        <input type="text" name="txtContra" placeholder="Ingrese Contraseña">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>