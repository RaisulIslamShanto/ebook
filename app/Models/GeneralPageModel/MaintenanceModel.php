<?php 


namespace App\Models;

use CodeIgniter\Model;



class MaintenanceModel extends Model{


    protected $table = 'maintenancetable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','description','status'];


}



?>


