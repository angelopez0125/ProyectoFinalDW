<?php 
namespace App\Models;

use CodeIgniter\Model;

class Sesion extends Model{
    protected $table      = 'usuarios';
    protected $primaryKey = 'dpi';
    protected $allowedFields=['dpi','usuario','contra','tipousuario_id'];
}