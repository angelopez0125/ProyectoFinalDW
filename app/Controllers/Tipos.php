<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Tipo;
class Tipos extends Controller{

    public function cargarTipos(){
        
        $tipo = new Tipo();
        //recibir el resultado del select en un array
        $datos['misTipos']=$tipo->orderBy('tipousuario_id','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('tipos/lista_tipo', $datos);
    }

    public function eliminarTipo($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $tipo = new Tipo();
        $tipo->delete($codigo);
       
        $datos['misTipos']=$tipo->orderBy('tipousuario_id','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('tipos/lista_tipo', $datos);
        
    }

    public function verFormularioNuevoTipo(){
        return view('tipos/form_nuevo_tipo');
    }

    public function guardarTipos(){
        
        $tipo = new Tipo();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtObservaciones = $this->request->getVar('txtObservaciones');
      
        //trasladar esos valores a la base de datos
        $datos=[
            'tipousuario_id'=>$txtCodigo,
            'nombre'=>$txtNombre,
            'observaciones'=>$txtObservaciones
        ];
        $tipo->insert($datos);

        //cargar la lista
        $datos['misTipos']=$tipo->orderBy('tipousuario_id','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('tipos/lista_tipo', $datos);
    }

    public function frmModificarTipo($codigo=null){
    
        $tipo = new Tipo();
        $datos['tipo']=$tipo->where('tipousuario_id',$codigo)->first();
        return view('tipos/form_modificar_tipo',$datos);
    }
    public function modificarTipo(){
        
        $tipo = new Tipo();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtObservaciones = $this->request->getVar('txtObservaciones');

        //trasladar esos valores a la base de datos
        $datos=[
            'nombre'=>$txtNombre,
            'observaciones'=>$txtObservaciones 
        ];
        $tipo->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misTipos']=$tipo->orderBy('tipousuario_id','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('tipos/lista_tipo', $datos);
    }










}