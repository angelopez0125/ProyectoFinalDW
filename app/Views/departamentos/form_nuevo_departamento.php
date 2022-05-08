<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Nuevo Departamento</title>
</head>
<body>
    <h1>Nuevo Departamento</h1>
    <form action="<?=base_url('guardarDepartamento')?>" method="get">
        <label for="txtCodigoDep">Código Departamento:</label>
        <input type="text" name="txtCodigoDep" placeholder="Ingrese Código">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese Nombre">
        <br>
        <label for="txtCodigoReg">Código Región:</label>
        <input type="text" name="txtCodigoReg" placeholder="Ingrese Región">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
</body>
</html> 