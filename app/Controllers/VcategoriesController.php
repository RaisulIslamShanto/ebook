<?php


namespace App\Controllers;


use App\Models\LanguageModel;
use App\Models\VariantCategoryModel;



class VcategoriesController extends BaseController{


    public function variantcategories()
    {
        $db = \Config\Database::connect();

        // $query = $db->table('languagetable')
        //     ->select('*')
        //     ->join('varcattable', 'languagetable.id = varcattable.language_id')
        //     ->get();
        //     $res = $query->getResultArray();

        // $query = $db->table('varcattable')
        //     ->select('a.*, b.catname as subcategory')
        //     ->from('varcattable a')
        //     ->join('varcattable b', 'a.parent_id = b.id', 'left outer join')
        //     ->get()
        //     ->getResultArray();
       
        $query = $db->table('varcattable a')
            ->select('a.*, b.catname as subcategory,languageName')
            ->join('varcattable b', 'a.parent_id = b.id', 'left')
            ->join('languagetable', 'a.language_id = languagetable.id', 'left')
            ->get();
        $data = $query->getResultArray();
           
        // echo '<pre>';
        //     print_r( $data);
        //     die();

        $sl=1;

        return view('variantcategory/variantcategory',['sl'=>$sl ,'categories'=>$data]);
        
    }

    public function addvcategory()
    {

        $languageModel = new LanguageModel();
        $lantable = $languageModel->findAll();

        $VariantCategoryModel = new VariantCategoryModel;
        $cattable = $VariantCategoryModel->findAll();


        // echo'<pre>';
        // print_r($cattable);
        // die();


        return view('variantcategory/addvcategory',['languages'=>$lantable,'cattable'=>$cattable]);
        
    }

    public function addvarcategoryform(){

        
        $parent_id = $this->request->getPost('parentCat');
        
        // print_r($parent_id);
        // die();
        
        $data = [

            'language_id' => $this->request->getPost('language'),
            'parent_id' => $parent_id,
            
            'catname' => $this->request->getPost('catname'),   
            'slug' => $this->request->getPost('slug'),    
            'description' => $this->request->getPost('description'),    
            'keywords' => $this->request->getPost('keywords'),   
            'color' => $this->request->getPost('color'),    
            'order' => $this->request->getPost('order'),    
            'showOnMenu' => $this->request->getPost('showOnMenu'),    
            'showOnHomePage' => $this->request->getPost('showOnHomePage'),   
        ];

        // print_r($data);
        // die();

        $VariantCategoryModel = new VariantCategoryModel();

        $VariantCategoryModel->insert($data);
 
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);
    }
    
    public function deletecategory($id)
    {

        $VariantCategoryModel = new VariantCategoryModel();
        $catdeleted = $VariantCategoryModel->delete($id);
        
        $VariantCategoryModel = new VariantCategoryModel();
        $cattable = $VariantCategoryModel->findAll();
        
        $sl=1;
        
        return view('variantcategory/variantcategory',['cattable'=>$cattable, 'sl'=>$sl]);
        
    }

    public function editcategory($id)
    {
        
        $VariantCategoryModel = new VariantCategoryModel();
        $data = $VariantCategoryModel->where('id',$id)->findAll();
    
        // echo '<pre>';
        // print_r($data);
        // die();

        $menuValue = $data[0]['showOnMenu'];


        $homepageValue = $data[0]['showOnHomePage'];

        // echo '<pre>';
        // print_r($menuValue);
        // print_r($homepageValue);
        // die();

        return view('variantcategory/editCategory', ['catdata'=>$data,'menuValue'=>$menuValue,'homepageValue'=>$homepageValue]); 
       
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

    
  


}







?>





