<?php 


namespace App\Models\PostModel;

use CodeIgniter\Model;



class SortedContentModel extends Model{

    protected $table = 'sortedcontenttable'; 
    protected $primaryKey = 'sortedContentId';
    protected $allowedFields = ['maintable_id','type','title','Image','Content']; 

}



?>


