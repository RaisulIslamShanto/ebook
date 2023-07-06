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
        $author = new Authormodel();
        // echo "hi";
        // die(); 

        if ($this->request->getMethod() === 'post')
        {
            $image = $this->request->getFile('image'); 
            $name = $this->request->getPost('name'); 
            $create = $this->request->getPost('create'); 
            $created = $this->request->getPost('created');
            $status = $this->request->getPost('status');
            $verified   = $this->request->getPost('verified');
        }
        
        $imageName = $image->getRandomName();
        $image->move('imageuploads/', $imageName);

        
       
        $data = 
        [

            'image'=> $imageName,
            'name'=>  $name,
            'create'=> $create,
            'created'=> $created,
            'status'=> $status,
            'verified'=> $verified,
             
           
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

