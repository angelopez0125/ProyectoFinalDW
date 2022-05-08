<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Region</title>
</head>
<body>
    <h1>Actualizar Region</h1>

    <form action="<?=base_url('modificarRegion')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" value="<?=$region['cod_region']?>" readonly>
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$region['nombre']?>">
        <br>
        <input type="text" name="txtDescripcion" value="<?=$region['descripcion']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>