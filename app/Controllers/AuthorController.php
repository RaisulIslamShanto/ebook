<?php

namespace App\Controllers;

use App\Models\add_author_model;

class AuthorController extends BaseController
{
   
    
    
    public function addAuthor()
    {
        // echo "r";
        // die();

        

        $author = new add_author_model();

        $data = 
        [
            'name'=> $this->request->getPost('name'), 
            'image'=> $this->request->getPost('image'), 
            'description'=> $this->request->getPost('description'), 
            'status'=> $this->request->getPost('status'), 
            'varified'=> $this->request->getPost('varified'), 
        
        ];

        // print_r($data);
        // die();

        // $author->save($data);
        $author->insert($data);

        // return redirect()->to(base_url('author/author'))->with('status','employee added successfully');
        return view('author/author');
       
        
    }
    
}
