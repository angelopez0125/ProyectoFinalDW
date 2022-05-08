<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Municipio;
use Kint\Zval\Representation\SourceRepresentation;

class Municipios extends Controller{
     
    public function cargarMunicipios(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $municipio = new Municipio();
        //recibir el resultado del select en un array
        $datos['misMunicipios']=$municipio->orderBy('cod_muni','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('municipios/lista_municipio', $datos);
    }
    public function eliminarMunicipio($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Municipio (modelo = conexion a la tabla)
        $municipio = new Municipio();
        $municipio->delete($codigo);
       
        $datos['misMunicipios']=$municipio->orderBy('cod_muni','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('municipios/lista_municipio', $datos);
        
    }
    public function verFormularioNuevoMunicipio(){
        return view('municipios/form_nuevo_municipio');
    }
    public function guardarMunicipios(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $municipio = new Municipio();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtCodigoDep = $this->request->getVar('txtCodigoDep');
        //trasladar esos valores a la base de datos
        $datos=[
            'cod_muni'=>$txtCodigo,
            'nombre'=>$txtNombre,
            'cod_depto'=>$txtCodigoDep
        ];
        $municipio->insert($datos);

        //cargar la lista
        $datos['misMunicipios']=$municipio->orderBy('cod_muni','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('municipios/lista_municipio', $datos);
    }
    public function frmModificarMunicipio($codigo=null){
        
        $municipio = new Municipio();
        $datos['municipio']=$municipio->where('cod_muni',$codigo)->first();
        return view('municipios/form_modificar_municipio',$datos);
    }
    public function modificarMunicipio(){
        //instanciar la clase Municipio (modelo = conexion con la tabla)
        $municipio = new Municipio();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtCodigoDep = $this->request->getVar('txtCodigoDep');

        //trasladar esos valores a la base de datos
        $datos=[
            'cod_muni'=>$txtCodigo,
            'nombre'=>$txtNombre,
            'cod_depto'=>$txtCodigoDep
    
        ];
        $municipio->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misMunicipios']=$municipio->orderBy('cod_muni','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('municipios/lista_municipio', $datos);
    }
    
}