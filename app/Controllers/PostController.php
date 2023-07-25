<?php


namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\LanguageModel;



class PostController extends BaseController{



    public function postformate()
    {

        return view('addpost/addpost');
        
    }


    public function article()
    {

        return view('addpost/articlepage');
        
    }


  


}







?>





