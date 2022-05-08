<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Usuarios extends Controller{
    

        public function cargarUsuarios(){
            //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
            $usuario = new Usuario();
            //recibir el resultado del select en un array
            $datos['misUsuarios']=$usuario->orderBy('dpi','ASC')->findAll();
            //enviando a la vista los datos de la busqueda
            return view('usuarios/lista_usuario', $datos);
        }

        public function eliminarUsuario($codigo=null){
            $usuario = new Usuario();
            $usuario->delete($codigo);
           
            $datos['misUsuarios']=$usuario->orderBy('dpi','ASC')->findAll();
            //enviando a la vista los datos de la busqueda
            return view('usuarios/lista_usuario', $datos);
            
        }

        public function verFormularioNuevoUsuario(){
            return view('usuarios/form_nuevo_usuario');
        }

        public function guardarUsuarios(){
            $usuario = new Usuario();
        
            $txtCodigo = $this->request->getVar('txtCodigo');
            $txtUsuario = $this->request->getVar('txtUsuario');
            $txtContra = $this->request->getVar('txtContra');
            $txtTipo = $this->request->getVar('txtTipo');
            //trasladar esos valores a la base de datos
            $datos=[
                'dpi'=>$txtCodigo,
                'usuario'=>$txtUsuario,
                'contra'=>$txtContra,
                'tipousuario_id'=>$txtTipo
            ];
            $usuario->insert($datos);
    
            //cargar la lista
            $datos['misUsuarios']=$usuario->orderBy('dpi','ASC')->findAll();
            //enviando a la vista los datos de la busqueda
            return view('usuarios/lista_usuario', $datos);
        }

        public function frmModificarUsuario($codigo=null){
        
            $usuario = new Usuario();
            $datos['usuario']=$usuario->where('dpi',$codigo)->first();
            return view('usuarios/form_modificar_usuario',$datos);
        }
        public function modificarUsuario(){
        
            $usuario = new Usuario();
            //recibir los datos de los distintos elementos del formulario
            $txtCodigo = $this->request->getVar('txtCodigo');
            $txtUsuario = $this->request->getVar('txtUsuario');
            $txtContra = $this->request->getVar('txtContra');
            $txtTipo = $this->request->getVar('txtTipo');
            //trasladar esos valores a la base de datos
            $datos=[
                'usuario'=>$txtUsuario,
                'contra'=>$txtContra,
                'tipousuario_id'=>$txtTipo
            ];
            $usuario->update($txtCodigo,$datos);
    
            //cargar la lista
            $datos['misUsuarios']=$usuario->orderBy('dpi','ASC')->findAll();
            //enviando a la vista los datos de la busqueda
            return view('usuarios/lista_usuario', $datos);
        }
        
    }




