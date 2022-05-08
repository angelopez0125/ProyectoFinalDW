<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Municipios</title>
</head>
<body>
    <h1>Actualizar Municipio</h1> 

    <form action="<?=base_url('modificarMunicipio')?>" method="get">
        <label for="txtCodigo">Código Municipio:</label>
        <input type="text" name="txtCodigo" value="<?=$municipio['cod_muni']?>" readonly>
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$municipio['nombre']?>">
        <br>
        <label for="txtCodigoDep">Código Departamento:</label>
        <input type="text" name="txtCodigoDep" value="<?=$municipio['cod_depto']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</body>
</html>