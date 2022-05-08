<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Tipo de Usuario</title>
</head>
<body>
    <h1>Nuevo Tipo de Usario</h1>
    <form action="<?=base_url('guardarTipo')?>" method="get">
        <label for="txtCodigo">Tipo de Usario:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese Tipo de Usuario">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        <br>
        <label for="txtObservaciones">Observaciones:</label>
        <input type="text" name="txtObservaciones" placeholder="Ingrese Observaciones">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>