<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Ciudadano</title>
</head>
<body>
    <h1>Actualizar Ciudadano</h1>  
    <center><input type="submit"  name="Submit" value="imprimir" onclick="javascript:window.print()"></center>
    <br>
    <form action="<?=base_url('modificarCiudadano')?>" method="get">
        <label for="txtDpi">Dpi:</label>
        <input type="text" name="txtDpi" value="<?=$ciudadano['dpi']?>" readonly>
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" value="<?=$ciudadano['apellido']?>">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$ciudadano['nombre']?>">
        <br>
        <label for="txtDireccion">Dirección:</label>
        <input type="text" name="txtDireccion" value="<?=$ciudadano['direccion']?>">
        <br>
        <label for="txtTelefonoCasa">Telefono Casa:</label>
        <input type="text" name="txtTelefonoCasa" value="<?=$ciudadano['tel_casa']?>">
        <br>
        <label for="txtTelefonoMovil">Telefono Móvil:</label>
        <input type="text" name="txtTelefonoMovil" value="<?=$ciudadano['tel_movil']?>">
        <br>
        <label for="txtEmail">Correo Electrónico:</label>
        <input type="text" name="txtEmail" value="<?=$ciudadano['email']?>">
        <br>
        <label for="txtFecha">Fecha de nacimiento:</label>
        <input type="text" name="txtFecha" value="<?=$ciudadano['fechanac']?>">
        <br>
        <label for="txtCodigoAcad">Código Nivel Academico:</label>
        <input type="text" name="txtCodigoAcad" value="<?=$ciudadano['cod_nivel_acad']?>">
        <br>
        <label for="txtLugarNac">Lugar de Nacimiento:</label>
        <input type="text" name="txtLugarNac" value="<?=$ciudadano['lugar_nacimiento']?>">
        <br>
        <label for="txtContra">Contraseña:</label>
        <input type="text" name="txtContra" value="<?=$ciudadano['contra']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>