<?php 
namespace App\Controllers; 

use CodeIgniter\Controller;
use App\Models\Departamento;
class Departamentos extends Controller{

    public function cargarDepartamentos(){
        
        $departamento = new Departamento();
        //recibir el resultado del select en un array
        $datos['misDepartamentos']=$departamento->orderBy('cod_depto','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('departamentos/lista_departamento', $datos);
    }
    public function eliminarDepartamento($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $departamento = new Departamento();
        $departamento->delete($codigo);
       
        $datos['misDepartamentos']=$departamento->orderBy('cod_depto','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('departamentos/lista_departamento', $datos);
        
    }
    public function verFormularioNuevoDepartamento(){
        return view('departamentos/form_nuevo_departamento'); 
    }
    public function guardarDepartamentos(){
        
        $departamento = new Departamento();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigoDep = $this->request->getVar('txtCodigoDep');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtCodReg = $this->request->getVar('txtCodReg');

        //trasladar esos valores a la base de datos
        $datos=[
            'cod_depto'=>$txtCodigoDep,
            'nombre'=>$txtNombre,
            'cod_region'=>$txtCodReg
        ];
        $departamento->insert($datos);

        //cargar la lista
        $datos['misDepartamentos']=$departamento->orderBy('cod_depto','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('departamentos/lista_departamento', $datos);
    }
    public function frmModificarDepartamento($codigo=null){
        
        $departamento = new Departamento();
        $datos['departamento']=$departamento->where('cod_depto',$codigo)->first();
        return view('departamentos/form_modificar_departamento',$datos);
    }
    public function modificarDepartamento(){
        
        $departamento = new Departamento();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigoDep = $this->request->getVar('txtCodigoDep');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtCodigoReg = $this->request->getVar('txtCodigoReg');

       
        
        //trasladar esos valores a la base de datos
        $datos=[
            'cod_depto'=>$txtCodigoDep, 
            'nombre'=>$txtNombre,
            'cod_region'=>$txtCodigoReg
        ];
        $departamento->update($txtCodigoDep,$datos);

        //cargar la lista
        $datos['misDepartamentos']=$departamento->orderBy('cod_depto','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('departamentos/lista_departamentos', $datos);
    }




}