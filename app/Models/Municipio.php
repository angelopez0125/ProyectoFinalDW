<?php 
namespace App\Models;

use CodeIgniter\Model;

class Municipio extends Model{
    protected $table      = 'municipios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cod_muni';
    //campos permitidos (campos a los que se tendra acceso)
    protected $allowedFields =['cod_muni','nombre','cod_depto'];
} 