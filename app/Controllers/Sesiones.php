<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Sesion;
class Sesiones extends Controller{

    public function iniciarSesion(){
        $usuario = $this->request->getVar('txtUsuario');
        $contra = $this->request->getVar('txtContra');
            //echo $usuario;
            //echo $contra;

            $sql="select * from usuarios where usuario='". $usuario ."' and contra=('".$contra."')";
            //echo $sql;
            $conexion = db_connect(); //conexion de la base de datos
            //ejecutar el codigo sql
            $ejecutar = $conexion->query($sql);
            //ver cantidad de registros, si existe 1 registro el usuario y contraseña son validos
            $cantidad = $ejecutar->getNumRows();
            //echo "Cantidad de usuario localizados: ". $cantidad;
            if($cantidad>0){
                //posicionarse en el registro localizado 
                $usuario = $ejecutar->getRow(0);
                //echo $usuario->codigo;
                //echo $usuario->usuario;
                //echo $usuario->password;
                //echo $usuario->tipo_id; //con el tipo voy a saber a que menu ingresar
    
                if ($usuario->tipousuario_id ==1){
                    return view('sesiones/Administrador');
                    //echo "ir al menu de administrador";
                }elseif($usuario->tipousuario_id==2){
                    return view('sesiones/Encargado');
                    //echo "ir al menu bibliotecario";
                }elseif($usuario->tipousuario_id==3){
                    //echo "ir al menu de operador";
                    return view('sesiones/Operador');
                }else{
                    return view('inicio_sesion');
                    //echo "regresar al inicio de sesión";
                }
    
            }else{
                echo "Datos incorrectos, verifique información";
                return view('sesiones/inicio_sesion');
            }


     
    }

}