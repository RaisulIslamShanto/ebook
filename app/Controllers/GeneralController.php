<?php


namespace App\Controllers;

use App\Models\LanguageModel;
use App\Models\LanFileModel;
use App\Models\GeneralPageModel\GeneralsettingModel;
use App\Models\GeneralPageModel\ContactSettingModel;
use App\Models\GeneralPageModel\SocialmediaModel;
use App\Models\GeneralPageModel\CustomModel;
use App\Models\GeneralPageModel\CookiesModel;
use App\Models\GeneralPageModel\LogoModel;




class GeneralController extends BaseController{


    public function general()
    {

        $lanModel = new LanguageModel();
        $lanName = $lanModel->findAll();

        $LogoModel = new LogoModel();
        $logoformdata = $LogoModel->findAll();
        // echo "<pre>";
        // print_r($logoformdata);
        // die();

        return view('general/general',["lanName"=>$lanName,"logodata"=>$logoformdata]);
        
    }

    public function generalsetting()
    {

        $time = $this->request->getPost('time');
        $application = $this->request->getPost('application');
        $url = $this->request->getPost('url');
        $copyright = $this->request->getPost('copyright');
       
        $data = [
            'time' => $time,
            'application' => $application,    
            'url' => $url,    
            'copyright' => $copyright    
        ];

        $GeneralsettingModel = new GeneralsettingModel();

        $GeneralsettingModel->insert($data);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);
    }

    public function logoform(){

        $LogoModel = new LogoModel();

        $logo = $this->request->getFile('logo');
        $logoFooter = $this->request->getFile('logoFooter');
        $logoEmail = $this->request->getFile('logoEmail');
        $favimg = $this->request->getFile('favimg');
        
        // echo "<pre>";
        // print_r($favimg);
        // die();

        $logoName = $logo->getRandomName();
        $logoFooterName = $logoFooter->getRandomName();
        $logoEmailName = $logoEmail->getRandomName();
        $faviconName = $favimg->getRandomName();

        $logo->move('logouploads/', $logoName);
        $logoFooter->move('logouploads/', $logoFooterName);
        $logoEmail->move('logouploads/', $logoEmailName);
        $favimg->move('logouploads/', $faviconName);

        // echo "<pre>";
        // print_r($logoformdata);
        // die();

        $logoform = [

            'logo' => $logoName,    
            'logoFooter' => $logoFooterName,    
            'logoEmail' => $logoEmailName,    
            'favicon' => $faviconName,    
        ];

        $LogoModel->insert($logoform);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'File inserted successfully.']);
                 
    }

    public function consetting()
    {

        $Address = $this->request->getPost('Address');
        $Email = $this->request->getPost('Email');
        $Phone = $this->request->getPost('Phone');
        $Contact = $this->request->getPost('Contact');
       
        $data = [
            'address' => $Address,
            'email' => $Email,    
            'phone' => $Phone,    
            'contact' => $Contact    
        ];

        $ContactSettingModel = new ContactSettingModel();

        $ContactSettingModel->insert($data);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);
    }
    public function smediasetting()
    {

        $face = $this->request->getPost('face');
        $twit = $this->request->getPost('twit');
        $inst = $this->request->getPost('inst');
        $pint = $this->request->getPost('pint');
       
        $data = [
            'face' => $face,
            'twit' => $twit,    
            'inst' => $inst,    
            'pint' => $pint    
        ];

        $SocialmediaModel = new SocialmediaModel();

        $SocialmediaModel->insert($data);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);
    }
    public function cookies()
    {
        $cookieswarning = $this->request->getPost('cookieswarning');
        $cwarning = $this->request->getPost('yes');
        
        // print_r($customHeader);
        // die();
        $data = [
            'cookieswarning' => $cookieswarning,   
            'showCookiesWarning' => $cwarning,   
        ];

        $CookiesModel = new CookiesModel();

        $CookiesModel->insert($data);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);
    }
    public function custom()
    {

       
        $customHeader = $this->request->getPost('customHeader');
        
        // print_r($customHeader);
        // die();
        $data = [
            'customheader' => $customHeader,   
        ];

        $CustomModel = new CustomModel();

        $CustomModel->insert($data);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);
    }
    


    public function recaptcha()
    {

        $siteKey = $this->request->getPost('siteKey');
        $secretKey = $this->request->getPost('secretKey');
       
        $data = [
            'siteKey' => $siteKey,
            'secretKey' => $secretKey,    
        ];

        $recaptchamodel = new RecapModel();

        $recaptchamodel->insert($data);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);
    }
    
    public function editrecaptcha($id)
{
    
    $recaptchamodel = new RecapModel();
    $data = $recaptchamodel->find($id);

    return view('general/general', ["recaptcha"=>$data]); 
   
}



public function updaterecaptcha($id)
{
    
    
    $recaptchamodel = new RecapModel();
    $data = $recaptchamodel->find($id);

   
    $data = [

        'siteKey' => $this->request->getPost('siteKey'),
        'secretKey' => $this->request->getPost('secretKey'),
        
    ];

    
    $updateebook->update($id,$data);

    return json_encode($data);
     
   
}

    
    public function maintenance()
    {

        $siteKey = $this->request->getPost('siteKey');
        $secretKey = $this->request->getPost('secretKey');
        $status = $this->request->getPost('status');
       
        $data = [

            'siteKey' => $siteKey,
            'secretKey' => $secretKey,    
            'status' => $status,    
        ];

        $MaintenanceModel = new MaintenanceModel();

        $MaintenanceModel->insert($data);

        
        return $this->response->setJSON(['status' => 'success', 'message' => 'Form inserted successfully.']);
    }



}







?>





