<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ciudadano;

class Ciudadanos extends Controller{ 

    public function iniciarSesionCiudadano(){
        $dpi = $this->request->getVar('txtDpi');
        $contra = $this->request->getVar('txtContra');
            //echo $usuario;
            //echo $contra;

            $sql="select * from ciudadanos where dpi='". $dpi ."' and contra=('".$contra."')";
            //echo $sql;
            $conexion = db_connect(); //conexion de la base de datos
            //ejecutar el codigo sql
            $ejecutar = $conexion->query($sql);
            //ver cantidad de registros, si existe 1 registro el usuario y contraseña son validos
            $cantidad = $ejecutar->getNumRows();
            //echo "Cantidad de usuario localizados: ". $cantidad;
            if($cantidad>0){
                //posicionarse en el registro localizado 
                $dpi = $ejecutar->getRow(0);
                //echo $usuario->codigo;
                //echo $usuario->usuario;   
                //echo $usuario->password;
                //echo $usuario->tipo_id; //con el tipo voy a saber a que menu ingresar
                $ciudadano = new Ciudadano();
                //recibir el resultado del select en un array
                $datos['misCiudadanos']=$ciudadano->orderBy('dpi','ASC')->findAll();
                //enviando a la vista los datos de la busqueda
                return view('ciudadanos/lista_ciudadano', $datos);
            
            
             
              
               
       
            }else{
                echo "Datos incorrectos, verifique información";
                return view('sesiones/inicio_ciudadano');
            }


     
    }

    public function cargarCiudadanos(){
        //instanciar la clase Ciudadano (Models con conexion a la tabla de la base de datos)
        $ciudadano = new Ciudadano();
        //recibir el resultado del select en un array
        $datos['misCiudadanos']=$ciudadano->orderBy('dpi','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('ciudadanos/lista_ciudadano', $datos);
    }
 

    public function eliminarCiudadano($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Ciudadano (modelo = conexion a la tabla)
        $ciudadano = new Ciudadano();
        $ciudadano->delete($codigo);
       
        $datos['misCiudadanos']=$ciudadano->orderBy('dpi','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('ciudadanos/lista_ciudadano', $datos);
        
    }

    public function verFormularioNuevoCiudadano(){
        return view('ciudadanos/form_nuevo_ciudadano');
    }

    public function guardarCiudadano(){
        //instanciar la clase Ciudadano (modelo = conexion con la tabla)
        $ciudadano = new Ciudadano();
        //recibir los datos de los distintos elementos del formulario
        $txtDpi = $this->request->getVar('txtDpi');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDireccion = $this->request->getVar('txtDireccion');
        $txtTelCasa = $this->request->getVar('txtTelCasa');
        $txtTelMovil = $this->request->getVar('txtTelMovil');
        $txtEmail = $this->request->getVar('txtEmail');
        $txtFechaNac = $this->request->getVar('txtFechaNac ');
        $txtCodNivelAcad = $this->request->getVar('txtCodNivelAcad');
        $txtLugarNacimiento = $this->request->getVar('txtLugarNacimiento');
        $txtContra = $this->request->getVar('txtContra');
        //trasladar esos valores a la base de datos
        $datos=[
            'dpi'=>$txtDpi,
            'apellido'=>$txtApellido,
            'nombre'=>$txtNombre,
            'direccion'=>$txtDireccion,
            'tel_casa'=>$txtTelCasa,
            'tel_movil'=>$txtTelMovil,
            'email'=>$txtEmail,
            'fechanac'=>$txtFechaNac,
            'cod_nivel_acad'=>$txtCodNivelAcad,
            'lugar_nacimiento'=>$txtLugarNacimiento,
            'contra'=>$txtContra
        ];
        $ciudadano->insert($datos);

        //cargar la lista
        $datos['misCiudadanos']=$ciudadanos->orderBy('dpi','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('ciudadanos/lista_ciudadanos', $datos);
    }

    public function frmModificarCiudadano($dpi=null){
    
        $ciudadano = new Ciudadano();
        $datos['ciudadano']=$ciudadano->where('dpi',$dpi)->first();
        return view('ciudadanos/form_modificar_ciudadano', $datos);
    }
    public function modificarCiudadano(){
        
        $ciudadano = new Ciudadano();
        
        $txtDpi = $this->request->getVar('txtDpi');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDireccion = $this->request->getVar('txtDireccion');
        $txtTelCasa = $this->request->getVar('txtTelCasa');
        $txtTelMovil = $this->request->getVar('txtTelMovil');
        $txtEmail = $this->request->getVar('txtEmail');
        $txtFechaNac = $this->request->getVar('txtFechaNac ');
        $txtCodNivelAcad = $this->request->getVar('txtCodNivelAcad');
        $txtLugarNacimiento = $this->request->getVar('txtLugarNacimiento');
        $txtContra = $this->request->getVar('txtContra');
        //trasladar esos valores a la base de datos
        $datos=[
            'dpi'=>$txtDpi,
            'apellido'=>$txtApellido,
            'nombre'=>$txtNombre,
            'direccion'=>$txtDireccion,
            'tel_casa'=>$txtTelCasa,
            'tel_movil'=>$txtTelMovil,
            'email'=>$txtEmail,
            'fechanac'=>$txtFechaNac,
            'cod_nivel_acad'=>$txtCodNivelAcad,
            'lugar_nacimiento'=>$txtLugarNacimiento,
            'contra'=>$txtContra
        ];
        $ciudadano->update($txtDpi,$datos);

        //cargar la lista
        $datos['misCiudadanos']=$ciudadano->orderBy('dpi','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('ciudadanos/lista_ciudadano', $datos);
    }



}