<?php 


namespace App\Models\GeneralPageModel;

use CodeIgniter\Model;


class SocialmediaModel extends Model
{

    protected $table = 'socialmediatable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['face','twit','inst','pint'];

}







?>


