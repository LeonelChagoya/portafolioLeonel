<?php
namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model{

      //nombre tabla
      protected $table = "t_usuario";
      //llave primaria
      protected $primaryKey = "id";
      //retorna variable tipo array
      protected $returnType = "array";
  
  
      protected $allowedFields = [
          'usuario',
          'password',   
          'type'      
      ];
    
    public function obtenerUsuario($data){
        $Usuario = $this->db->table('t_usuario');
        $Usuario ->where($data);
        return $Usuario -> get() -> getResultArray();
    }
}