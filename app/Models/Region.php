<?php 
namespace App\Models;

use CodeIgniter\Model;

class Region extends Model{
    protected $table      = 'regiones';
    protected $primaryKey = 'cod_region';
    protected $allowedFields =['cod_region','nombre','descripcion'];

}