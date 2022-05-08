<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Tipo de Usuario</title>
</head>
<body>
    <h1>Actualizar Tipo de Usuario</h1>

    <form action="<?=base_url('modificarTipo')?>" method="get">
        <label for="txtCodigo">Tipo de Usuario:</label>
        <input type="text" name="txtCodigo" value="<?=$tipo['tipousuario_id']?>" readonly>
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$tipo['nombre']?>">
        <br>
        <label for="txtObservaciones">Observaciones:</label>
        <input type="text" name="txtObservaciones" value="<?=$tipo['observaciones']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>