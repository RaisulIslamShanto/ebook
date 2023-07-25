<?php 


namespace App\Models;

use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;

class Authormodel extends Model
{



    protected $table = 'authortable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['image','name','create','created','status','verified']; 
}




?>


