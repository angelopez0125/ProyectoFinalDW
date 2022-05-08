<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Nivel;
class Niveles extends Controller{

    public function cargarNiveles(){
        $nivel = new Nivel();
        //recibir el resultado del select en un array
        $datos['misNiveles']=$nivel->orderBy('cod_nivel_acad','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('niveles/lista_nivel', $datos);
    }

    public function eliminarNivel($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $nivel = new Nivel();
        $nivel->delete($codigo);
       
        $datos['misNiveles']=$nivel->orderBy('cod_nivel_acad','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('niveles/lista_nivel', $datos);
        
    }

    public function verFormularioNuevoNivel(){
        return view('niveles/form_nuevo_nivel');
    }

    public function guardarNiveles(){
        $nivel = new Nivel();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDescripcion = $this->request->getVar('txtDescripcion');
        //trasladar esos valores a la base de datos
        $datos=[
            'cod_nivel_acad'=>$txtCodigo,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDescripcion
        ];
        $nivel->insert($datos);

        //cargar la lista
        $datos['misNiveles']=$nivel->orderBy('cod_nivel_acad','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('niveles/lista_nivel', $datos);
    }

    public function frmModificarNivel($codigo=null){
    
        $nivel = new Nivel();
        $datos['nivel']=$nivel->where('cod_nivel_acad',$codigo)->first();
        return view('niveles/form_modificar_nivel', $datos);
    }
    public function modificarNivel(){
        $nivel = new Nivel();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDescripcion = $this->request->getVar('txtDescripcion');

        //trasladar esos valores a la base de datos
        $datos=[
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDescripcion
        ];
        $nivel->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misNiveles']=$nivel->orderBy('cod_nivel_acad','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('niveles/lista_nivel', $datos);
    }
}