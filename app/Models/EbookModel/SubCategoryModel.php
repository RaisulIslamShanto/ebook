<?php 


namespace App\Models;

use CodeIgniter\Model;



class SubCategoryModel extends Model{


    protected $table = 'subcategory'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','subcategoryname','cid']; 



}



?>


