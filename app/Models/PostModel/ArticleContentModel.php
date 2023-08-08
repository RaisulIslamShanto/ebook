<?php 


namespace App\Models\PostModel;

use CodeIgniter\Model;



class ArticleContentModel extends Model{


    protected $table = 'articlecontenttable'; 
    protected $primaryKey = 'articleContentId';
    protected $allowedFields = ['maintable_id','type','ArticleContent']; 

}



?>


