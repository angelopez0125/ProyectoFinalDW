<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inicio de sesión Ciudadanos</title>
</head>

<body>
    <h1>Inicio de sesión</h1>
    <form action="<?=base_url('inicio_ciudadano')?>" method="post">
        <label for="txtDpi">DPI</label>
        <input type="text" name="txtDpi" id="txtDpi">
        <label for="txtContra">Contraseña</label>
        <input type="password" name="txtContra" id="txtContra">
        <input type="submit" value="Iniciar Sesión" name="btnIniciar">
    </form>
    

    
</body>

</html>