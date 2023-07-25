<?php 


namespace App\Models\GeneralPageModel;

use CodeIgniter\Model;


class CustomModel extends Model
{

    protected $table = 'customtable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['customheader'];

}







?>


