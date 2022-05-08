<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Ciudadanos</title>
</head>
<body>
    <div class="contenedor">
    <h1>Ciudadanos</h1>
    <a href="<?=base_url('ver_formulario_nuevo_ciudadano')?>">
        <span class="material-icons">person_add</span>
    </a>
    
    <?php
        //print_r($ciudadanos);
    ?>
    <table>
        <thead>
            <tr class="encabezado_tabla">
                <th>DPI</th>
                <th>APELLIDO</th>
                <th>NOMBRE</th>
                <th>Dirección</th>
                <th>TELEFONO CASA</th>
                <th>TELEFONO MOVIL</th>
                <th>EMAIL</th>
                <th>FECHA DE NACIMIENTO</th>
                <th>CODIGO NIVEL ACADEMICO</th>
                <th>LUGAR NACIMIENTO</th>
                <th>CONTRASEÑA</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $no_fila=0;
                foreach($misCiudadanos as $datos):
                    $no_fila=$no_fila+1; //$no_fila++;
                    if($no_fila%2==0){
                        echo "<tr class='fila_par'>";
                    }else{
                        echo "<tr class='fila_impar'>";
                    }
                ?>
            <!-- <tr> este elemento lo creare en las condicionantes para cambiar color -->
                <td><?php echo $datos['dpi']; ?></td>
                <td><?=$datos['apellido']; ?></td>
                <td><?=$datos['nombre']; ?></td>
                <td><?=$datos['direccion']; ?></td>
                <td><?=$datos['tel_casa']; ?></td>
                <td><?=$datos['tel_movil']; ?></td>
                <td><?=$datos['email']; ?></td>
                <td><?=$datos['fechanac']; ?></td>
                <td><?=$datos['cod_nivel_acad']; ?></td>
                <td><?=$datos['lugar_nacimiento']; ?></td>
                <td><?=$datos['contra']; ?></td>
                <td>
                    <a href="<?=base_url('frm_modificar_ciudadano/'.$datos['dpi'])?>">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="<?=base_url('eliminar_ciudadano/'.$datos['dpi'])?>">
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