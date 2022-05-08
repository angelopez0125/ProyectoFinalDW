<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Region;
class Regiones extends Controller{

    public function cargarRegiones(){
        $region = new Region();
        //recibir el resultado del select en un array
        $datos['misRegiones']=$region->orderBy('cod_region','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('regiones/lista_region', $datos);
    }

    public function eliminarRegion($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $region = new Region();
        $region->delete($codigo);
       
        $datos['misRegiones']=$region->orderBy('cod_region','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('regiones/lista_region', $datos);
        
    }

    public function verFormularioNuevoRegion(){
        return view('regiones/form_nuevo_region');
    }

    public function guardarRegiones(){
    
        $region = new Region();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDescripcion = $this->request->getVar('txtDescripcion');
        //trasladar esos valores a la base de datos
        $datos=[
            'cod_region'=>$txtCodigo,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtNombre
        ];
        $region->insert($datos);

        //cargar la lista
        $datos['misRegiones']=$region->orderBy('cod_region','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('regiones/lista_region', $datos);
    }

    public function frmModificarRegion($codigo=null){
    
        $region = new Region();
        $datos['region']=$region->where('cod_region',$codigo)->first();
        return view('regiones/form_modificar_region', $datos);
    }
    public function modificarRegion(){
        $region = new Region();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDescripcion = $this->request->getVar('txtDescripcion');

        //trasladar esos valores a la base de datos
        $datos=[
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDescripcion
        ];
        $region->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misRegiones']=$region->orderBy('cod_region','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('regiones/lista_region', $datos);
    }

}