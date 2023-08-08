<?php 


namespace App\Models\PostModel;

use CodeIgniter\Model;



class ArticleModel extends Model{


    protected $table = 'articletable'; 
    protected $primaryKey = 'id';
    
    
    protected $allowedFields = 
    ['type',
    'title',
    'Slug',
    'Summary',
    'Keywords',
    'visibility',
    'Featured',
    'Breaking',
    'Slider',
    'Recommended',
    'Registered',
    'tags',
    'OptionalUrl',
    'content',
    'ImageUrl',
    'ImageDescription',
    'AdditionalImages',
    'Files',
    'language_id',
    'category',
    'subcategory',
    'datePublished']; 

}



?>


