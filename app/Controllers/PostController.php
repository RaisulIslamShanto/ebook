<?php


namespace App\Controllers;

use App\Models\VariantCategoryModel;
use App\Models\LanguageModel;
use App\Models\PostModel\ArticleModel;
use App\Models\PostModel\GalleryModel;
use App\Models\PostModel\SortedListModel;
use App\Models\PostModel\VideoModel;
use App\Models\PostModel\AudioModel;
use App\Models\PostModel\QuizeModel;



class PostController extends BaseController{



    public function postformate()
    {
        
        return view('addpost/addpost');
        
    }

    public function allpost()
    {

        $ArticleModel = new ArticleModel();
        $articlerow = $ArticleModel->findAll();

        // echo '<pre>';
        // print_r($articlerow);
        // die();
        
        $sl=1;

        $VariantCategoryModel = new VariantCategoryModel();
        $cattable = $VariantCategoryModel->findAll();

        return view('addpost/allpost',['articledata'=>$articlerow,'cattable'=>$cattable,'sl'=>$sl]);
        
    }

    public function deletepost($id){

        $ArticleModel = new ArticleModel();
        $delpost = $ArticleModel->delete($id);  
        
        $ArticleModel = new ArticleModel();
        $articlerow = $ArticleModel->findAll();
        
        $sl=1;

        $VariantCategoryModel = new VariantCategoryModel();
        $cattable = $VariantCategoryModel->findAll();

        return view('addpost/allpost',['articledata'=>$articlerow,'cattable'=>$cattable,'sl'=>$sl]);
    }

    public function editcategory($id)
    {
        
        $ArticleModel = new ArticleModel;
        $articlerow = $ArticleModel->where('id',$id)->findAll();
    
        return view('addpost/editpost',['articledata'=>$articlerow,'cattable'=>$cattable,'sl'=>$sl]);
           
    }

    public function updatevarcategory($id)
    {
       
     $VariantCategoryModel = new VariantCategoryModel;
     $catrow = $VariantCategoryModel->find($id);

        $data = [

            'language' => $this->request->getPost('language'),
            'parentCat' => $this->request->getPost('parentCat'),
            'catname' => $this->request->getPost('catname'),   
            'slug' => $this->request->getPost('slug'),    
            'description' => $this->request->getPost('description'),    
            'keywords' => $this->request->getPost('keywords'),   
            'color' => $this->request->getPost('color'),    
            'order' => $this->request->getPost('order'),    
            'showOnMenu' => $this->request->getPost('showOnMenu'),    
            'showOnHomePage' => $this->request->getPost('showOnHomePage'),   
        ];
        
        $VariantCategoryModel->update($id,$data);

        // return $this->response->setJSON(['status' => 'success', 'message' => 'Form updated successfully.']);

        $VariantCategoryModel = new VariantCategoryModel();
        $cattable = $VariantCategoryModel->findAll();
        
        $sl=1;
        
        
        return view('variantcategory/variantcategory',['cattable'=>$cattable, 'sl'=>$sl]);

    }







    public function article()
    {

        $LanguageModel = new LanguageModel();
        $languagetable = $LanguageModel->findAll();

        $CategoryModel = new VariantCategoryModel();
        $categoryTable = $CategoryModel->findAll();

        // echo '<pre>';
        // print_r($categoryTable);
        // die();

        return view('addpost/articlepage',['lantable' => $languagetable, 'cattable' => $categoryTable]);
        
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
   
        'type'=>$this->request->getPost('type'),
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
        $LanguageModel = new LanguageModel();
        $languagetable = $LanguageModel->findAll();

        $CategoryModel = new VariantCategoryModel();
        $categoryTable = $CategoryModel->findAll();
        return view('addpost/gallerypage',['lantable' => $languagetable, 'cattable' => $categoryTable]);
        
    }

    public function galleryform()
    {

        $GalleryModel = new GalleryModel;
        
        $AdditionalImages = $this->request->getFile('AdditionalImages');
        $Files = $this->request->getFile('Files');
        
        $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        $fileNameFiles = $Files->getRandomName();
        $Files->move('articleuploads/', $fileNameFiles);
        
        

       $data = [
   
        'type'=>$this->request->getPost('type'),
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

        $LanguageModel = new LanguageModel();
        $languagetable = $LanguageModel->findAll();

        $CategoryModel = new VariantCategoryModel();
        $categoryTable = $CategoryModel->findAll();
        return view('addpost/sortedListPage',['lantable' => $languagetable, 'cattable' => $categoryTable]);
        
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
        $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        $fileNameFiles = $Files->getRandomName();
        $Files->move('articleuploads/', $fileNameFiles);
        
        

       $data = [
        'type'=>$this->request->getPost('type'),
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

    
    public function videopage()
    {
        $LanguageModel = new LanguageModel();
        $languagetable = $LanguageModel->findAll();

        $CategoryModel = new VariantCategoryModel();
        $categoryTable = $CategoryModel->findAll();
        return view('addpost/videopage',['lantable' => $languagetable, 'cattable' => $categoryTable]);
        
    }
    public function videoform()
    {

        $VideoModel = new VideoModel;
        
        $AdditionalImages = $this->request->getFile('AdditionalImages');
        $Files = $this->request->getFile('Files');
        
        $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        $fileNameFiles = $Files->getRandomName();
        $Files->move('articleuploads/', $fileNameFiles);
        
        // echo'<pre>';
        //    print_r('hello');
        //    die();
        
       $data = [
        'type'=>$this->request->getPost('type'),
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

        $VideoModel->insert($data);
   
       return $this->response->setJSON(['status' => 'success', 'message' => 'File inserted successfully.']);
        
    }

    public function audiopage()
    {
        $LanguageModel = new LanguageModel();
        $languagetable = $LanguageModel->findAll();

        $CategoryModel = new VariantCategoryModel();
        $categoryTable = $CategoryModel->findAll();
        return view('addpost/audiopage',['lantable' => $languagetable, 'cattable' => $categoryTable]);
        
    }

    public function audioform()
    {

        $AudioModel = new AudioModel();
        
        $AdditionalImages = $this->request->getFile('AdditionalImages');
        $Files = $this->request->getFile('Files');
        
        $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        $fileNameFiles = $Files->getRandomName();
        $Files->move('articleuploads/', $fileNameFiles);
        
        

       $data = [
        'type'=>$this->request->getPost('type'),
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

        $AudioModel->insert($data);
   
       return $this->response->setJSON(['status' => 'success', 'message' => 'File inserted successfully.']);
        
    }

    public function quizepage()
    {
        $LanguageModel = new LanguageModel();
        $languagetable = $LanguageModel->findAll();

        $CategoryModel = new VariantCategoryModel();
        $categoryTable = $CategoryModel->findAll();
        return view('addpost/quizepage',['lantable' => $languagetable, 'cattable' => $categoryTable]);
        
    }
    public function quizeform()
    {

        $QuizeModel = new QuizeModel();
        
        $AdditionalImages = $this->request->getFile('AdditionalImages');
        $Files = $this->request->getFile('Files');
        
        $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        $fileNameFiles = $Files->getRandomName();
        $Files->move('articleuploads/', $fileNameFiles);
        
        

       $data = [
        'type'=>$this->request->getPost('type'),
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

        $QuizeModel->insert($data);
   
       return $this->response->setJSON(['status' => 'success', 'message' => 'File inserted successfully.']);
        
    }







}







?>





