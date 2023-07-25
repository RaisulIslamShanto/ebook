<?php 


namespace App\Models\GeneralPageModel;

use CodeIgniter\Model;


class GeneralsettingModel extends Model
{

    protected $table = 'generalsettingtable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['time','application','url','copyright'];

}







?>


