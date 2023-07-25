<?php


namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\LanguageModel;
use App\Models\PostModel\ArticleModel;
use App\Models\PostModel\GalleryModel;
use App\Models\PostModel\SortedListModel;



class PostController extends BaseController{



    public function postformate()
    {

        return view('addpost/addpost');
        
    }

    public function allpost()
    {
        return view('addpost/allpost');
        
    }


    public function article()
    {

        return view('addpost/articlepage');
        
    }

    public function articleform()
    {

        // echo "hello";

        // echo'<pre>';
        // print_r("clear");
        // die();

        $ArticleModel = new ArticleModel;
        
        $AdditionalImages = $this->request->getFile('AdditionalImages');
        $Files = $this->request->getFile('Files');
        
        $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        $fileNameFiles = $Files->getRandomName();
        $Files->move('articleuploads/', $fileNameFiles);
        
        

       $data = [
   
        'title'=>$this->request->getPost('title'),
        'Slug'=>$this->request->getPost('Slug'),
        'Summary'=>$this->request->getPost('Summary'),
        'Keywords'=>$this->request->getPost('Keywords'),
        'visibility'=>$this->request->getPost('visibility'),
        'Featured'=>$this->request->getPost('Featured'),
        'Breaking'=>$this->request->getPost('Breaking'),
        'Slider'=>$this->request->getPost('Slider'),
        'Recommended'=>$this->request->getPost('Recommended'),
        'Registered'=>$this->request->getPost('Registered'),
        'tags'=>$this->request->getPost('tags'),
        'OptionalUrl'=>$this->request->getPost('OptionalUrl'),
        'ImageUrl'=>$this->request->getPost('ImageUrl'),
        'ImageDescription'=>$this->request->getPost('ImageDescription'),
        'AdditionalImages'=>$fileNameAdditionalImages,
        'Files'=>$fileNameFiles,
        'language'=>$this->request->getPost('language'),
        'category'=>$this->request->getPost('category'),
        'subcategory'=>$this->request->getPost('subcategory'),   
        'datePublished'=>$this->request->getPost('datePublished')   
       ];
       
        //    echo'<pre>';
        //    print_r($data);
        //    die();
       

        
       $ArticleModel->insert($data);
   


       return $this->response->setJSON(['status' => 'success', 'message' => 'File inserted successfully.']);
        
    }

    public function gallery()
    {

        return view('addpost/gallerypage');
        
    }

    public function galleryform()
    {

        // echo "hello";

        // echo'<pre>';
        // print_r("clear");
        // die();

        $GalleryModel = new GalleryModel;
        
        $AdditionalImages = $this->request->getFile('AdditionalImages');
        $Files = $this->request->getFile('Files');
        
        $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        $AdditionalImages->move('galleryuploads/', $fileNameAdditionalImages);

        $fileNameFiles = $Files->getRandomName();
        $Files->move('galleryuploads/', $fileNameFiles);
        
        

       $data = [
   
        'title'=>$this->request->getPost('title'),
        'Slug'=>$this->request->getPost('Slug'),
        'Summary'=>$this->request->getPost('Summary'),
        'Keywords'=>$this->request->getPost('Keywords'),
        'visibility'=>$this->request->getPost('visibility'),
        'Featured'=>$this->request->getPost('Featured'),
        'Breaking'=>$this->request->getPost('Breaking'),
        'Slider'=>$this->request->getPost('Slider'),
        'Recommended'=>$this->request->getPost('Recommended'),
        'Registered'=>$this->request->getPost('Registered'),
        'tags'=>$this->request->getPost('tags'),
        'OptionalUrl'=>$this->request->getPost('OptionalUrl'),
        'ImageUrl'=>$this->request->getPost('ImageUrl'),
        'ImageDescription'=>$this->request->getPost('ImageDescription'),
        'AdditionalImages'=>$fileNameAdditionalImages,
        'Files'=>$fileNameFiles,
        'language'=>$this->request->getPost('language'),
        'category'=>$this->request->getPost('category'),
        'subcategory'=>$this->request->getPost('subcategory'),   
        'datePublished'=>$this->request->getPost('datePublished')   
       ];
       
        //    echo'<pre>';
        //    print_r($data);
        //    die();
       

        
           $GalleryModel->insert($data);
   


       return $this->response->setJSON(['status' => 'success', 'message' => 'File inserted successfully.']);
        
    }
    
    public function sortedListpage()
    {

        return view('addpost/sortedListPage');
        
    }

    public function sortedListForm()
    {

        // echo "hello";

        // echo'<pre>';
        // print_r("clear");
        // die();

        $SortedListModel = new SortedListModel;
        
        $AdditionalImages = $this->request->getFile('AdditionalImages');
        $Files = $this->request->getFile('Files');
        
        $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        $AdditionalImages->move('sortedListuploads/', $fileNameAdditionalImages);

        $fileNameFiles = $Files->getRandomName();
        $Files->move('sortedListuploads/', $fileNameFiles);
        
        

       $data = [
   
        'title'=>$this->request->getPost('title'),
        'Slug'=>$this->request->getPost('Slug'),
        'Summary'=>$this->request->getPost('Summary'),
        'Keywords'=>$this->request->getPost('Keywords'),
        'visibility'=>$this->request->getPost('visibility'),
        'Featured'=>$this->request->getPost('Featured'),
        'Breaking'=>$this->request->getPost('Breaking'),
        'Slider'=>$this->request->getPost('Slider'),
        'Recommended'=>$this->request->getPost('Recommended'),
        'Registered'=>$this->request->getPost('Registered'),
        'tags'=>$this->request->getPost('tags'),
        'OptionalUrl'=>$this->request->getPost('OptionalUrl'),
        'ImageUrl'=>$this->request->getPost('ImageUrl'),
        'ImageDescription'=>$this->request->getPost('ImageDescription'),
        'AdditionalImages'=>$fileNameAdditionalImages,
        'Files'=>$fileNameFiles,
        'language'=>$this->request->getPost('language'),
        'category'=>$this->request->getPost('category'),
        'subcategory'=>$this->request->getPost('subcategory'),   
        'datePublished'=>$this->request->getPost('datePublished')  

       ];
       
        //    echo'<pre>';
        //    print_r($data);
        //    die();

        $SortedListModel->insert($data);
   
       return $this->response->setJSON(['status' => 'success', 'message' => 'File inserted successfully.']);
        
    }

}







?>





