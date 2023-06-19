<?php 


namespace App\Models;

use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;

class Authormodel extends Model
{



    protected $table = 'authorlist'; // Set the table name here
    protected $primaryKey = 'id';
    protected $allowedFields = ['Image','Name','CreatedBy','Status','Varified','Created']; 
}




?>


