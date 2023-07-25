<?php 


namespace App\Models\GeneralPageModel;

use CodeIgniter\Model;




class LogoModel extends Model
{

    protected $table = 'logoformtable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['logo', 'logoFooter', 'logoEmail', 'favicon'];

}





?>


