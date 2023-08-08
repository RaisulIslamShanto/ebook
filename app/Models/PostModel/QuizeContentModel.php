<?php 


namespace App\Models\PostModel;

use CodeIgniter\Model;



class QuizeContentModel extends Model{

    protected $table = 'quizecontenttable'; 
    protected $primaryKey = 'quizeContentId';
    protected $allowedFields = ['maintable_id','type','question','qImage','qContent','result','rImage','rContent','NumberOfCorrectAnswerMax','NumberOfCorrectAnswerMin']; 

}



?>


