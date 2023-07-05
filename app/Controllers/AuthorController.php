<?php

namespace App\Controllers;

use App\Models\Authormodel;

class AuthorController extends BaseController
{
   
    
    public function authorform(){

        return view('author/addauthor');

    }
    
    public function addauthor()
    {   

        // echo "hi";
        // die();

    

        $author = new Authormodel();
       
        $data = 
        [
            'name'=> $this->request->getPost('name'), 
            'create'=> $this->request->getPost('create'), 
            'created'=> $this->request->getPost('created'), 
           
        ];

        // print_r($data);
        // die();
        
       $authordata = $author->insert($data);

        if($authordata){
            return 'Data successfully inserted';
        }else{
            return 'Error inserting';
        }

    
            // $sl=1;


    // return view('author/authortable',$data,['sl'=>$sl] );


     

}



}

