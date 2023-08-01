<?php


namespace App\Controllers;


use App\Models\LanguageModel;
use App\Models\VariantCategoryModel;



class VcategoriesController extends BaseController{


    public function variantcategories()
    {
        $VariantCategoryModel = new VariantCategoryModel();
        $cattable = $VariantCategoryModel->findAll();
        // echo '<pre>';
        // print_r($cattable);
        // die();
        $sl=1;

        return view('variantcategory/variantcategory',['cattable'=>$cattable, 'sl'=>$sl]);
        
    }

    public function addvcategory()
    {

        return view('variantcategory/addvcategory');
        
    }

    public function addvarcategoryform(){

        // $language = $this->request->getPost('language');
        // $Email = $this->request->getPost('Email');
        // $Phone = $this->request->getPost('Phone');
        // $Contact = $this->request->getPost('Contact');
       
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





