<?php 


namespace App\Models\GeneralPageModel;

use CodeIgniter\Model;


class ContactSettingModel extends Model
{

    protected $table = 'consettingtable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['address','email','phone','contact'];

}







?>


