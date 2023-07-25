<?php 


namespace App\Models;

use CodeIgniter\Model;



class RecapModel extends Model{


    protected $table = 'recaptchatable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['siteKey','secretKey'];



}



?>


