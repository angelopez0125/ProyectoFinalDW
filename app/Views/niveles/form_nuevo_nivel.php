<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Nivel</title>
</head>
<body>
    <h1>Nuevo Nivel</h1>
    <form action="<?=base_url('guardarNivel')?>" method="get">
        <label for="txtCodigo">Código:</label>
        <input type="text" name="txtCodigo" placeholder="Ingrese Código">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        <br>
        <label for="txtDescripcion">Descripción:</label>
        <input type="text" name="txtDescripcion" placeholder="Ingrese Descripción">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>