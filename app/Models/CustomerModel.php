<?php 
namespace App\Models;

use CodeIgniter\Model;



class CustomerModel extends Model{
    //nombre tabla
    protected $table = "customer";
    //llave primaria
    protected $primaryKey = "id";
    //retorna variable tipo array
    protected $returnType = "array";


    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'address'
    ];

    protected $useTimeStamps = true;

    //fecha creacion
    protected $createdField = "created_at";
    //fecha actualizacion
    protected $updatedField = "updated_at";
    //campo de eliminado para determinar si esta eliminado o no 
    protected $deleted_at = "deleted_at";

    //activado o no el campo de eliminado 

    protected $useSoftDeletes = false;
}
