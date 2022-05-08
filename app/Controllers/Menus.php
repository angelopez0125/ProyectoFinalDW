<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Menu;

class Menus extends Controller{

    public function iniciar(){
        
        return view('inicio_sesion');

        
         }
    
         public function iniciarCiudadano(){
        
            return view('sesiones/inicio_ciudadano');
    
            
             }



}