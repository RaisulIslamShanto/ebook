<?php 


namespace App\Models;

use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;

class LanguageModel extends Model
{

    protected $table = 'languagetable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['languageName','shortForm','languageCode','order','editorlan','status'];

}







?>


