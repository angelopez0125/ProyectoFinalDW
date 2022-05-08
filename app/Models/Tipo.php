<?php 
namespace App\Models;

use CodeIgniter\Model;

class Tipo extends Model{
    protected $table      = 'tipos_usuarios';
    protected $primaryKey = 'tipousuario_id';
    protected $allowedFields =['tipousuario_id','nombre','observaciones'];
}