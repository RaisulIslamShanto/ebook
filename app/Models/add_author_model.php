<?php 


namespace App\Models;

use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;

class add_author_model extends Model
{

    

    protected $table = 'authortable'; // Set the table name here
    protected $primaryKey = 'id';
    protected $allowedFields = ['name','description','image','status','varified']; 
}




?>


