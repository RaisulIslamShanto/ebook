<?php 

namespace App\Controllers;

use App\Models\EbookModel;
// use App\Models\SubCategoryModel;
use CodeIgniter\Controller;



class EbookController extends Controller
{
   

    public function ebook()

{

  return view('ebookshow/ebook');
   
}



    public function ebookform()

{
       
    return view('ebookshow/ebookform');
      
}


    public function addebook()

{
    

    $ebookModel = new EbookModel;

    
    if ($this->request->getMethod() === 'post') 
    {

        
        $title = $this->request->getPost('title');
        $user = $this->request->getPost('user');
        $photo = $this->request->getFile('photo');
        

        // print_r($photo);
        // die();

        if ($photo->isValid() && !$photo->hasMoved()) {
            $photoName = $photo->getRandomName();
            $photo->move('uploads/', $photoName);
            
        }

        
      
        $ebookData = [

            'title' => $this->request->getPost('title'),
            'user' => $this->request->getPost('user'),
            'photo' => $photoName,
            
            
        ];

        // print_r($ebookData);
        // die();

        $ebookModel->save($ebookData);

       
        return redirect()->to('ebooktable')->with('status', 'success');
       
       
}



}



        public function ebookformsubmit()
        
        {
            $ebookModel = new EbookModel;
            $data['ebook'] = $ebookModel->paginate();
            $data['pager'] = $ebookModel->pager;

            // $sl = 1;

            return view('ebookshow/ebooktable',$data);
            
        }



        // delete ebook

    public function deleteebook($id)
    {
        
         $deletecat = new EbookModel;
         $deletecat->delete($id);
    
    
         //return view('category/add_category');
    
         return redirect()->to(base_url('ebooktable'));
    }
       



    /// edit ebook

    public function editebook($id)
{
    
    
    $editebook = new EbookModel;
    $data = $editebook->find($id);

    //  print_r($data);
    //  die();

    return view('ebookshow/edit_ebook', ["ebookname"=>$data]); 
   
}


// update

public function updateebook($id)
{
    
    
         $updateebook = new EbookModel;
          $ebook = $updateebook->find($id);

    // print_r($ebook['photo']);
    // die();
    $file = $this->request->getFile('photo');

    if ($file->isValid() && !$file->hasMoved())
    {
        $old_photo = $ebook['photo'];    
        if(file_exists("uploads/".$old_photo)){
            unlink("uploads/".$old_photo);
        }
        $photoName = $file->getRandomName();
        $file->move('uploads/', $photoName);
    }

    $data = [

        'title' => $this->request->getPost('title'),
        'user' => $this->request->getPost('user'),
        'photo' => $photoName,
    ];

    
    $updateebook->update($id,$data);

    return redirect()->to(base_url('ebooktable'));


    // return view('category/edit_category',$data); 
   
}

public function search(){

    if($this->request->getGet('search')){

        $ebookModel = new EbookModel;
        $search = $this->request->getGet('search');
        

        $searchResults =  $ebookModel->search($search);

       
            $data['ebook'] = $ebookModel->paginate();
            $data['pager'] = $ebookModel->pager;

        // print_r($searchResults);
        // die();
        
        // $data['searchResults'] = $searchResults;

        // $ebookData ['title'] = $ebookModel->like('title', $search)->findAll();

        return view('/ebookshow/ebooksearchshow', ['searchResults' => $searchResults],$data);

    }

        
      
}

















}








?>
