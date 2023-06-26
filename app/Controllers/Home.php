<?php

namespace App\Controllers;
use App\Models\EbookModel;
use App\Models\AuthorModel;
use App\Models\CategoryModel;

// use App\Models\add_author_model;

class Home extends BaseController
{
    public function index()
    {
         // Create an instance of the UserModel
         $authorModel = new Authormodel();

         // Fetch all users from the database
         $users = $authorModel->findAll();
         

         return view('ebook/index', ['users'=>$users]);
     

       
    }
    public function login()
    {

        return view('ebook/login');
       
        
    }
    public function logout()
    {

        return view('ebook/logout');
       
        
    }
    public function category()
    {

        return view('category/category');
       
        
    }
    public function author()
    {

        $authorModel = new AuthorModel();

        $users = $authorModel->findAll();

        return view('author/author',['user'=>$users]);


       
       
        
    }

    public function ebook()
    {

        return view('ebookshow/ebook');
       
        
    }

    public function addAuthor()
    {

         return view('addauthor/addauthor');
       
        
    }
    public function store()
    {
        // echo "r";
        // die();

        $author = new Authormodel();

        $data = 
        [
            'Image'=> $this->request->getPost('image'), 
            'Name'=> $this->request->getPost('Name'), 
            'CreatedBy'=> $this->request->getPost('CreatedBy'), 
            'Status'=> $this->request->getPost('Status'), 
            'Verified'=> $this->request->getPost('Verified'), 
            'Created'=> $this->request->getPost('Created'), 

        ];

        // print_r($data);
        // die();

        // $author->save($data);
        $author->insert($data);

        // return redirect()->to(base_url('author/author'))->with('status','employee added successfully');
        return view('author/author');
       
        
    }

        //front view 

    public function frontview(){



        $ebookModel = new EbookModel;

        $ebookrow = $ebookModel->findAll();


        $authorModel = new AuthorModel;

        $authorrow = $authorModel->findAll();

        $catModel = new CategoryModel;

        $catrow = $catModel->findAll();






        return view('frontview/frontview', ['imageData' => $ebookrow,'catdata' => $catrow, 'authordata'=>$authorrow]);
       

        




        // return view('image_view', ['imageData' => $imageData]);
        // return view('frontview/frontview');


    }

    //     public function ebookname(){

    //     $ebookModel = new EbookModel;

    //     $ebookrow = $ebookModel->findAll();
    //     return view('frontview/frontview', ['ebookname' => $ebookrow]);

    // }



    
}
