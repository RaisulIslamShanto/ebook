<?php 


namespace App\Models\GeneralPageModel;

use CodeIgniter\Model;



class RecapModel extends Model{


    protected $table = 'recaptchatable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['siteKey','secretKey'];



}



?>


