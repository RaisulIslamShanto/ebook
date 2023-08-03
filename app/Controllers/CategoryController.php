<?php 

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\SubCategoryModel;
use CodeIgniter\Controller;

class CategoryController extends Controller
{
   
    public function categoryShow()
{
    
    return view('category/category');
}



    public function addcategory()
{


    $categoryModel = new CategoryModel;
    
    if ($this->request->getMethod() === 'post') 
    {

        $name = $this->request->getPost('categoryname');
        $searchable = $this->request->getPost('searchable');
        $status = $this->request->getPost('status');
        

        // echo  $searchable;
        // die();

        $categoryData = [

            'category_name' => $name,
            'searchable' => $searchable,
            'status' => $status,
        ];

        // print_r($categoryData);
        // die();


        $categoryModel->insert($categoryData);

        

    }

    $categoryModel = new CategoryModel();

    $users = $categoryModel->findAll();

    // print_r($users);
    // die();

    


    foreach ($users as $key => $user){

        $scmodel = new SubCategoryModel;

        $subcategories = $scmodel->where("cid", $user["id"])->find();

        // echo "<pre>";
        // print_r($subcategories);
        // die();

        $users[$key]["subcategories"] = $subcategories;
         
        // echo "<pre>";
        // print_r($users[$key]["subcategories"]);
        // die();
    }


    // print_r($users);
    // die();  

    $sl=1;

    return view('category/add_category',['categories'=>$users, 'sl'=>$sl]);




    // .view('category/add_sub_category',['categories'=>$users]);

    // return view('category/add_category', [
    //     // 'data' => $data,
    //     'successMessage' => $successMessage
    // ]);
}



/// edit category

    public function editcategory($id)
{
    
    
    $editcat = new CategoryModel;

    $data['edit_category'] = $editcat->find($id);
    
    //  

    return view('category/edit_category', $data); 
   
}

// update

    public function updatecategory($id)
{
    
    
    $updatecat = new CategoryModel;
    $updatecat->find($id);

    $data = [

        'category_name' => $this->request->getPost('categoryname'),
    ];

    
    $updatecat->update($id,$data);

    return redirect()->to(base_url('addcategory'));


    // return view('category/edit_category',$data); 
   
}





// delete category

    public function deletecategory($id)
{
    
     $deletecat = new CategoryModel;
     $deletecat->delete($id);


     //return view('category/add_category');

     return redirect()->to(base_url('addcategory'));
}
   




//  settiing value for subcategory


    public function subcategoryview($id)
{
    
    $category = new CategoryModel;
    
    
    $data = $category->find($id);

    $categoryName = $data['category_name'];
    $categoryid = $data['id'];

    $dataid['id'] = $categoryid;
    // print_r($categoryid);

    // die();

    $data['category_name'] = $categoryName;

   
    return view('category/subcategoryview', $data , $dataid);

    // return redirect()->to(base_url('subcategoryview',$categoryName));
   
}
   

    public function addSubCategory()
{

    return view('category/add_sub_category');
}



    public function showcategory()
{

        $categoryModel = new CategoryModel();

        $users = $categoryModel->findAll();

        // print_r($users);
        // die();

        return view('category/category',['user'=>$users]);

}


public function addcategorywithajaxm()
{


        $categoryModel = new CategoryModel;
    
        $name = $this->request->getPost('categoryname');
        $searchable = $this->request->getPost('searchable');
        $status = $this->request->getPost('status');
        

        $categoryData = [

            'category_name' => $name,
            'searchable' => $searchable,
            'status' => $status,
        ];

        // print_r($categoryData);
        // die();


        $categoryModel->insert($categoryData);

        return json_encode($categoryData);   

}

public function getCategories()
    {
        $categoryModel = new CategoryModel();

        $users = $categoryModel->findAll();
    
        foreach ($users as $key => $user){
    
            $scmodel = new SubCategoryModel;
    
            $subcategories = $scmodel->where("cid", $user["id"])->find();
    
            // print_r($subcategories);
            // die();
    
            $users[$key]["subcategories"] = $subcategories;
             
            // print_r($users[$key]["subcategories"]);
            // die();
        }

        // print_r($users);
        // die();
        
        return $this->response->setJSON($users);
    }

public function deletecategorywithajax($id){

    
    $deletecat = new CategoryModel;
    $deletecat->delete($id);

    return ("data deleted");

}

public function editcategorywithajax($id){

    
    $editcat = new CategoryModel;
    $editvalue= $editcat->find($id);

    // print_r($editvalue);
    // die();
    return $this->response->setJSON($editvalue);

}

public function updatecatwithajax($id){

    // print_r($id);
    // die();

    $name = $this->request->getPost('categoryname');

    // echo $name;
    // die();
    $updatecat = new CategoryModel;


    $updatevalue = $updatecat->find($id);

    

    $data = [

        'category_name' =>$name,
    ];

    
    $updatecat->update($id,$data);



    // print_r($editvalue);
    // die();
    return json_encode($data);

}







}








?>
