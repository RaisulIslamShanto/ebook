<?php 


namespace App\Models\GeneralPageModel;

use CodeIgniter\Model;



class MaintenanceModel extends Model{


    protected $table = 'maintenancetable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','description','status'];


}



?>


