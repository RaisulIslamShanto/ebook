<?php 


namespace App\Models;

use CodeIgniter\Model;



class VariantCategoryModel extends Model{


    protected $table = 'varcattable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['language','parentCat','catname','slug','description','keywords','color','order','showOnMenu','showOnHomePage']; 



}



?>


