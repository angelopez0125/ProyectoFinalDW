<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;
class Libros extends Controller{

    public function cargarLibros(){
        //instanciar la clase Empleado (Models con conexion a la tabla de la base de datos)
        $libro = new Libro();
        //recibir el resultado del select en un array
        $datos['misLibros']=$libro->orderBy('codigo_libro','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('libros/lista_libro', $datos);
    }

    public function eliminarLibro($codigo=null){
        //echo "Codigo: ". $codigo;
        //instanciar la clase Empleado (modelo = conexion a la tabla)
        $libro = new Libro();
        $libro->delete($codigo);
       
        $datos['misLibros']=$libro->orderBy('codigo_libro','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('libros/lista_libro', $datos);
        
    }

    public function verFormularioNuevoLibro(){
        return view('libros/form_nuevo_libro');
    }

    public function guardarLibros(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $libro = new Libro();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtCodigoautor = $this->request->getVar('txtCodigoautor');
        $txtCodigoeditorial = $this->request->getVar('txtCodigoeditorial');
        $txtTitulo = $this->request->getVar('txtTitulo');
        $txtPaginas = $this->request->getVar('txtPaginas');
        $txtTamano = $this->request->getVar('txtTamano');
        $txtPrecio = $this->request->getVar('txtPrecio');
        $txtEstado = $this->request->getVar('txtEstado');
        $txtEdicion = $this->request->getVar('txtEdicion');




        //trasladar esos valores a la base de datos
        $datos=[
            'codigo_libro'=>$txtCodigo,
            'codigo_autor'=>$txtCodigoautor,
            'codigo_editorial'=>$txtCodigoeditorial,
            'titulo'=>$txtTitulo,
            'numero_paginas'=>$txtPaginas,
            'tamanio'=>$txtTamano,
            'precio'=>$txtPrecio,
            'estado'=>$txtEstado,
            'edicion'=>$txtEdicion
        ];
        $libro->insert($datos);

        //cargar la lista
        $datos['misLibros']=$libro->orderBy('codigo_libro','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('libros/lista_libro', $datos);
    }

    public function frmModificarLibro($codigo=null){
    
        $libro = new Libro();
        $datos['libro']=$libro->where('codigo_libro',$codigo)->first();
        return view('libros/form_modificar_libro',$datos);
    }
    public function modificarLibro(){
        //instanciar la clase Empleado (modelo = conexion con la tabla)
        $libro = new Libro();
        //recibir los datos de los distintos elementos del formulario
        $txtCodigo = $this->request->getVar('txtCodigo');
        $txtCodigoautor = $this->request->getVar('txtCodigoautor');
        $txtCodigoeditorial = $this->request->getVar('txtCodigoeditorial');
        $txtTitulo = $this->request->getVar('txtTitulo');
        $txtPaginas = $this->request->getVar('txtPaginas');
        $txtTamano = $this->request->getVar('txtTamano');
        $txtPrecio = $this->request->getVar('txtPrecio');
        $txtEstado = $this->request->getVar('txtEstado');
        $txtEdicion = $this->request->getVar('txtEdicion');

        //trasladar esos valores a la base de datos
        $datos=[
            'codigo_autor'=>$txtCodigoautor,
            'codigo_editorial'=>$txtCodigoeditorial,
            'titulo'=>$txtTitulo,
            'numero_paginas'=>$txtPaginas,
            'tamanio'=>$txtTamano,
            'precio'=>$txtPrecio,
            'estado'=>$txtEstado,
            'edicion'=>$txtEdicion
        ];
        $libro->update($txtCodigo,$datos);

        //cargar la lista
        $datos['misLibros']=$libro->orderBy('codigo_libro','ASC')->findAll();
        //enviando a la vista los datos de la busqueda
        return view('libros/lista_libro', $datos);
    }



}