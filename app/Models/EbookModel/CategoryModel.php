<?php 


namespace App\Models;

use CodeIgniter\Model;


class CategoryModel extends Model
{



    protected $table = 'categorytable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['category_name','searchable','status']; 
}


// class SubCategoryModel extends Model{


//     protected $table = 'subcategorytable'; 
//     protected $primaryKey = 'id';
//     protected $allowedFields = ['id','subcategory_name']; 



// }



?>


