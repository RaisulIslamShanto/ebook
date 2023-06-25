<?php

namespace App\Controllers;

use App\Models\Authormodel;

class AuthorController extends BaseController
{
   
    

    public function index(){

        return view('author/addauthor');

    }
    

    public function addAuthor()
    {
       
        $author = new Authormodel();

        if ($this->request->getMethod() === 'post') 
    {

        // Retrieve the category name from the form
        $name = $this->request->getPost('name');
        $create = $this->request->getPost('create');
        $created = $this->request->getPost('created');
        


        $data = 
        [
            'name'=> $this->request->getPost('name'), 
            'create'=> $this->request->getPost('create'), 
            'created'=> $this->request->getPost('created'), 
           
        ];

        // print_r($data);
        // die();

        $author->insert($data);

        // return redirect()->to(base_url('author/author'))->with('status','employee added successfully');
        //return view('author/addauthor');
       
        
    }
    

    $author = new Authormodel();

    // $users = $author->findAll();
    $data['author'] = $author->paginate();
    $data['pager'] = $author->pager;
    
    $sl=1;

    return view('author/authortable',$data,['sl'=>$sl] );


    

}







}

