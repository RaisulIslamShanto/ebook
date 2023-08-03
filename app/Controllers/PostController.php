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

    public function editpost($id)
    {
        
        $ArticleModel = new ArticleModel;
        $articlerow = $ArticleModel->where('id',$id)->findAll();

        // echo'<pre>';
        // print_r($articlerow);
        // die();

    
        $visibility = $articlerow[0]['visibility'];
        $Featured = $articlerow[0]['Featured'];
        $Breaking = $articlerow[0]['Breaking'];
        $Slider = $articlerow[0]['Slider'];
        $Recommended = $articlerow[0]['Recommended'];
        $Registered = $articlerow[0]['Registered'];

        $LanguageModel = new LanguageModel();
        $languagetable = $LanguageModel->findAll();

        $CategoryModel = new VariantCategoryModel();
        $categoryTable = $CategoryModel->findAll();

        return view('addpost/editpost',['lantable' => $languagetable, 'cattable' => $categoryTable, 'data'=>$articlerow,
        'visibility'=>$visibility,'Featured'=>$Featured,'Breaking'=>$Breaking,'Slider'=>$Slider,'Recommended'=>$Recommended,
        'Registered'=>$Registered,]);
        
           
    }

    public function updatepost($id)
    {
       
        $ArticleModel = new ArticleModel;
        $articlerow = $ArticleModel->find($id);
     
        // echo "<pre>";
        // print_r($articlerow);
        // die();

        $AdditionalImages = $this->request->getFile('AdditionalImages');
        $Files = $this->request->getFile('Files');
        
        
        // echo "<pre>";
        // print_r($AdditionalImages);
        // die();

        
            $old_photo = $articlerow['AdditionalImages'];    
            if(file_exists("articleuploads/".$old_photo)){
                unlink("articleuploads/".$old_photo);
            }
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
        
        $ArticleModel->update($id,$data);

        // return $this->response->setJSON(['status' => 'success', 'message' => 'Form updated successfully.']);

        $VariantCategoryModel = new VariantCategoryModel();
        $cattable = $VariantCategoryModel->findAll();
        
        $LanguageModel = new LanguageModel();
        $languagetable = $LanguageModel->findAll();

        $ArticleModel = new ArticleModel;
        $articlerow = $ArticleModel->findAll();
        $sl=1;
        
        
        return view('addpost/allpost',['articledata'=>$articlerow,'cattable'=>$cattable,'lantable' => $languagetable, 'sl'=>$sl]);

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
        
        if ($this->request->getFile('AdditionalImages')->isValid()){

            $AdditionalImages = $this->request->getFile('AdditionalImages');
            $fileNameAdditionalImages = $AdditionalImages->getRandomName();
            $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);}
        else{
            $fileNameAdditionalImages = "no image";
        }

        if($this->request->getFile('Files')->isValid()){
            $Files = $this->request->getFile('Files');
            $fileNameFiles = $Files->getRandomName();
            $Files->move('articleuploads/', $fileNameFiles);
        }else{
            $fileNameFiles = "no file";
        }
        
        // echo "<pre>";
        // print_r($AdditionalImages);
        // die();

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
        
        // $AdditionalImages = $this->request->getFile('AdditionalImages');
        // $Files = $this->request->getFile('Files');
        
        // $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        // $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        // $fileNameFiles = $Files->getRandomName();
        // $Files->move('articleuploads/', $fileNameFiles);

        if ($this->request->getFile('AdditionalImages')->isValid()){

            $AdditionalImages = $this->request->getFile('AdditionalImages');
            $fileNameAdditionalImages = $AdditionalImages->getRandomName();
            $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);}
        else{
            $fileNameAdditionalImages = "no image";
        }

        if($this->request->getFile('Files')->isValid()){
            $Files = $this->request->getFile('Files');
            $fileNameFiles = $Files->getRandomName();
            $Files->move('articleuploads/', $fileNameFiles);
        }else{
            $fileNameFiles = "no file";
        }
        

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
        
        // $AdditionalImages = $this->request->getFile('AdditionalImages');
        // $Files = $this->request->getFile('Files');
        
        // $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        // $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        // $fileNameFiles = $Files->getRandomName();
        // $Files->move('articleuploads/', $fileNameFiles);
        
        if ($this->request->getFile('AdditionalImages')->isValid()){

            $AdditionalImages = $this->request->getFile('AdditionalImages');
            $fileNameAdditionalImages = $AdditionalImages->getRandomName();
            $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);}
        else{
            $fileNameAdditionalImages = "no image";
        }

        if($this->request->getFile('Files')->isValid()){
            $Files = $this->request->getFile('Files');
            $fileNameFiles = $Files->getRandomName();
            $Files->move('articleuploads/', $fileNameFiles);
        }else{
            $fileNameFiles = "no file";
        }

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
        
        // $AdditionalImages = $this->request->getFile('AdditionalImages');
        // $Files = $this->request->getFile('Files');
        
        // $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        // $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        // $fileNameFiles = $Files->getRandomName();
        // $Files->move('articleuploads/', $fileNameFiles);
        
        if ($this->request->getFile('AdditionalImages')->isValid()){

            $AdditionalImages = $this->request->getFile('AdditionalImages');
            $fileNameAdditionalImages = $AdditionalImages->getRandomName();
            $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);}
        else{
            $fileNameAdditionalImages = "no image";
        }

        if($this->request->getFile('Files')->isValid()){
            $Files = $this->request->getFile('Files');
            $fileNameFiles = $Files->getRandomName();
            $Files->move('articleuploads/', $fileNameFiles);
        }else{
            $fileNameFiles = "no file";
        }
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
        
        // $AdditionalImages = $this->request->getFile('AdditionalImages');
        // $Files = $this->request->getFile('Files');
        
        // $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        // $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        // $fileNameFiles = $Files->getRandomName();
        // $Files->move('articleuploads/', $fileNameFiles);
        if ($this->request->getFile('AdditionalImages')->isValid()){

            $AdditionalImages = $this->request->getFile('AdditionalImages');
            $fileNameAdditionalImages = $AdditionalImages->getRandomName();
            $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);}
        else{
            $fileNameAdditionalImages = "no image";
        }

        if($this->request->getFile('Files')->isValid()){
            $Files = $this->request->getFile('Files');
            $fileNameFiles = $Files->getRandomName();
            $Files->move('articleuploads/', $fileNameFiles);
        }else{
            $fileNameFiles = "no file";
        }
        

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
        
        // $AdditionalImages = $this->request->getFile('AdditionalImages');
        // $Files = $this->request->getFile('Files');
        
        // $fileNameAdditionalImages = $AdditionalImages->getRandomName();
        // $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);

        // $fileNameFiles = $Files->getRandomName();
        // $Files->move('articleuploads/', $fileNameFiles);
        
        if ($this->request->getFile('AdditionalImages')->isValid()){

            $AdditionalImages = $this->request->getFile('AdditionalImages');
            $fileNameAdditionalImages = $AdditionalImages->getRandomName();
            $AdditionalImages->move('articleuploads/', $fileNameAdditionalImages);}
        else{
            $fileNameAdditionalImages = "no image";
        }

        if($this->request->getFile('Files')->isValid()){
            $Files = $this->request->getFile('Files');
            $fileNameFiles = $Files->getRandomName();
            $Files->move('articleuploads/', $fileNameFiles);
        }else{
            $fileNameFiles = "no file";
        }
        

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


    public function categoryUnderlanguage()
    {
        $languageId = $this->request->getGET('languageId');

        $db = \Config\Database::connect();
        
        $query = $db->table('varcattable')
            ->select('varcattable.*')
            ->where('language_id ', $languageId)
            ->get();
        $data = $query->getResultArray();
        // echo '<pre>';
        // print_r($data);
        // die();
        return json_encode($data);

    }

    public function subcategoryUnderCategory()
    {
        $categoryId = $this->request->getGET('catId');

        $db = \Config\Database::connect();
        
        $query = $db->table('varcattable')
            ->select('varcattable.*')
            ->where('parent_id ', $categoryId)
            ->get();
        $data = $query->getResultArray();
        // echo '<pre>';
        // print_r($data);
        // die();
        return json_encode($data);

    }






}







?>





