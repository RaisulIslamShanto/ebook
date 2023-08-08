<?php 


namespace App\Models\PostModel;

use CodeIgniter\Model;



class GAlleryContentModel extends Model{

    protected $table = 'gallerycontenttable'; 
    protected $primaryKey = 'galleryContentId';
    protected $allowedFields = ['maintable_id','type','title','Image','Content']; 

}



?>


