<?php 


namespace App\Models\PostModel;

use CodeIgniter\Model;



class ArticleModel extends Model{


    protected $table = 'articletable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = 
    ['title',
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
    'ImageUrl',
    'ImageDescription',
    'AdditionalImages',
    'Files',
    'language',
    'category',
    'subcategory',
    'datePublished']; 

}



?>


