<?php 


namespace App\Models\PostModel;

use CodeIgniter\Model;



class VideoContentModel extends Model{


    protected $table = 'articlecontenttable'; 
    protected $primaryKey = 'articleContentId';
    protected $allowedFields = ['type','ArticleContent']; 

}



?>

