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
       
        $data = 
        [
            'name'=> $this->request->getPost('name'), 
            'create'=> $this->request->getPost('create'), 
            'created'=> $this->request->getPost('created'), 
           
        ];

        print_r($data);
        die();
        

        $author->insert($data);

        // return $this->response->""

    

    // $users = $author->findAll();
    $data['author'] = $author->paginate();
    $data['pager'] = $author->pager;
    
    $sl=1;



    return view('author/authortable',$data,['sl'=>$sl] );


     

}








}

