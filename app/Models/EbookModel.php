<?php 


namespace App\Models;

use CodeIgniter\Model;


class EbookModel extends Model
{


    protected $table = 'ebooktable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['title','user','photo','category','author']; 




    public function search($search)
    {
    
                    $builder = $this->table($this->table);
                    $builder->like('title', $search); 
                    $results = $builder->get()->getResultArray();

                    // print_r($results);
                    // die();
                    return $results;
    }

}





?>


