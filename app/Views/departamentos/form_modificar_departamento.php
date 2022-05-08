<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo_form.css')?>">
    <title>Actualizar Departamento</title>
</head>
<body>
    <h1>Actualizar Departamento</h1> 

    <form action="<?=base_url('modificarDepartamento')?>" method="get">
        <label for="txtCodigoDep">Código Departamento:</label>
        <input type="text" name="txtCodigoDep" value="<?=$departamento['cod_depto']?>" readonly>
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$departamento['nombre']?>">
        <br>
        <label for="txtCodigoReg">Código Región:</label>
        <input type="text" name="txtCodigoReg" value="<?=$departamento['cod_region']?>">
        <br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
</body>
</html> 