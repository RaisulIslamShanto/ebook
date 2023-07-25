<?php 


namespace App\Models\GeneralPageModel;

use CodeIgniter\Model;


class CookiesModel extends Model
{

    protected $table = 'cookiestable'; 
    protected $primaryKey = 'id';
    protected $allowedFields = ['showCookiesWarning','cookieswarning'];

}







?>


