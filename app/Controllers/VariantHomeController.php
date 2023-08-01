<?php


namespace App\Controllers;

use App\Models\LanguageModel;
use App\Models\LanFileModel;



class VariantHomeController extends BaseController{


   

    public function language()
    {

        $language = new LanguageModel();
        $lanName = $language->findAll();

        // echo '<pre>';
        // print_r($lanName);
        // die();
        // ["authname"=>$authorrow, "catname"=>$catrow ]
        $sl=1;
        return view('language/language',["lanName"=>$lanName,"sl"=>$sl]);
        
    }

    public function addlanguage(){
       
        $languageName = $this->request->getPost('languageName');
        $shortForm = $this->request->getPost('shortForm');
        $languageCode = $this->request->getPost('languageCode');
        $order = $this->request->getPost('order');
        $editorlan = $this->request->getPost('editorlan');
        $status = 0;

        $data = [
            'languageName' => $languageName,
            'shortForm' => $shortForm,
            'languageCode' => $languageCode,
            'order' => $order,
            'editorlan' => $editorlan,
            'status' => $status
        ];

        $lanmodel = new LanguageModel();

        $lanmodel->insert($data);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);

    }

    public function addlanguagefile(){

        // echo "hi";
        // die();

        $lanModel = new LanFileModel();

        // if ($lanModel){
        //     echo "hi";
        //     die();
        // }

        $lanfile = $this->request->getFile('lanfile');
        
        $fileName = $lanfile->getRandomName();
        $lanfile->move('uploads/', $fileName);

        

        $lanfile = [

            'lanFile' => $fileName,    

        ];

        $landata = $lanModel->insert($lanfile);

        return $this->response->setJSON(['status' => 'success', 'message' => 'File inserted successfully.']);
                

    }
    
    public function makedefault()
    {

        $id = $this->request->getPost('id');
        // print_r($id);
        // die();
        $tableName = 'languagetable'; 
        
        // Load the database
        // $db = db_connect();

        $langModel = new LanguageModel;
        
        
        $langModel->query("UPDATE $tableName SET status = 0");

        
        $lanName = $langModel->find($id);

        // print_r($lanName);
        // die();

        $status = ['status' => 1];

        $langModel->update($id,$status);

        $sl=1;
        return $this->response->setJSON(['status' => 'success', 'message' => 'default set successfully.']);
        
    }


    


}







?>





