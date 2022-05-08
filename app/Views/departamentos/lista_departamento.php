<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Departamentos</title>
</head>
<body>
    <div class="contenedor">
    <h1>Departamentos</h1>
    <a href="<?=base_url('ver_formulario_nuevo_departamento')?>">
        <span class="material-icons">person_add</span>
    </a>
    
    <?php 
        //print_r($departamentos);
    ?>
    <table>
        <thead>
            <tr class="encabezado_tabla">
                <th>Código Departamento</th>
                <th>Nombre</th>
                <th>Código Región</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                
                $no_fila=0;
                foreach($misDepartamentos as $datos):
                    $no_fila=$no_fila+1; //$no_fila++;
                    if($no_fila%2==0){
                        echo "<tr class='fila_par'>";
                    }else{
                        echo "<tr class='fila_impar'>";
                    }
                ?>
            <!-- <tr> este elemento lo creare en las condicionantes para cambiar color -->
                <td><?php echo $datos['cod_depto']; ?></td>
                <td><?=$datos['nombre']; ?></td>
                <td><?=$datos['cod_region']; ?></td>
                <td>
                    <a href="<?=base_url('frm_modificar_departamento/'.$datos['cod_depto'])?>">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="<?=base_url('eliminar_departamento/'.$datos['cod_depto'])?>">
                        <span class="material-icons">delete</span>Eliminar
                    </a> 
                </td>
            </tr>
                <?php
                endforeach;
                
            ?>
            
        </tbody>
    </table>

    </div>
</body>
</html>