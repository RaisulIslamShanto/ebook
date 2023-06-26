<?php 

namespace App\Controllers;


use App\Models\SubCategoryModel;
use App\Models\CategoryModel;


use CodeIgniter\Controller;

class SubcategoryController extends Controller
{
   

    // protected $catid;

    // public function __construct(){

    //     $this->catid = $catid;
    // }

    public function addSubCategory()
{

        

    $subcatModel = new SubCategoryModel;

    $catModel = new CategoryModel;
    
    if ($this->request->getMethod() === 'post') 
    {
 

        $subcategoryname = $this->request->getPost('subcategoryname');
    
        // print_r($subcategoryname);
        // die();
        $catid = $this->request->getPost('catid');
        // print_r($catid);
        // die();

        $cattablerow = $catModel->find($catid); 

        // print_r($cattablerow);
        // die();

        $subcategoryData = [

            'subcategoryname' => $subcategoryname,
            'cid' => $catid,
             
        ];

        // print_r($subcategoryData);
        // die();


        $subcatModel->insert($subcategoryData);

        // print_r($catid);
        // die();
        
        
        // $subcat = $subcatModel->find($catid); 
           
        //    print_r($subcat);
        //    die();
        //    Array ( [id] => 2 [subcategoryname] => australia [cid] => 2 )

        //    $subcatname = $subcat['subcategoryname'];

        //    echo gettype($subcatname);
        //    die();
        //    print_r($subcatname);
        //    die();

        //    $data['namofsub'] = $subcatname;
        //    print_r($subcatname);
        //    die();

        // return view('category/add_category',['categories'=>$users, 'sl'=>$sl]);
        //    return redirect()->to(base_url('addcategory', $subcatname));

    }


    $categoryModel = new CategoryModel();

    $users = $categoryModel->findAll();

    // print_r($users);
    // die();

    


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

    $sl=1;

    return view('category/add_category',['categories'=>$users, 'sl'=>$sl]);

           
}


public function view(){



    return view('category/add_category');
}








}





?>
