<?php namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ActivityLoginModel;
use App\Models\CompanyModel;
use App\Models\SettingModel;
use FlashData;
use Session;

class LoginController extends BaseController
{
    public $validation;

    public function __construct()
    {
        $this->activityLoginModel = new ActivityLoginModel();
        $this->validation =  \Config\Services::validation();
        
    }

	public function login()
	{	 
        if(!session()->isLogin) {
            return view('authenticate/login');
        } else {
            return redirect('admin/dashboard');
        }
		
		// return view('welcome_message');
    }
    
    public function prosesLogin()
    {        
        $validation =  \Config\Services::validation();
        $data = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];
        //dd($this->validation,$validation);
        if($this->validation->run($data, 'login')) {
            $user = $this->model->findByEmail($data['email']);
            //dd($user);
            if($user) {
                if($user && $this->checkPassword($user,$data['password'])){
                    $setting = $this->companyModel->where('id',0)->first();
                    $data_setting = $this->settingModel->first();
                    $dataLogin = [
                        'isLogin' => true,
                        'user' => $user,
                        'setting' => $setting,
                        'data_setting' => $data_setting
                    ];
                    $user['last_login'] = date('Y-m-d h:i:s');
                    $this->model->update($user['id'],$user);
                    $dataActivity = [
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'ip' => $_SERVER['REMOTE_ADDR'],
                        'device' => $_SERVER['HTTP_USER_AGENT'],
                        'last_login' => $user['last_login']
                    ];
                    $this->activityLoginModel->save($dataActivity);
                    session()->set($dataLogin);
                    return redirect('admin/dashboard');
                } else {
                    return redirect()->back()->with('validation_errors','password is wrong !');
                }
            }
            return redirect()->back()->with('validation_errors','your account is not register');
            
        } else {
            $validation_errors = $this->validation->getErrors();
            return redirect()->back()->with('validation_errors',$validation_errors);
            //return view('authenticate/login', ['validation_errors' => $validation_errors]);
        }
        //return view('cms/dashboard/index');
    }

    public function checkPassword($user,$password)
    {
        $password_hash = password_hash($password,PASSWORD_BCRYPT);
        //dd(password_verify($password,$user['password']));
        if(password_verify($password,$user['password'])) {
            return true;
        } else {
            return false;
        }
    }

    public function update_password()
    {

    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->route('login');
    }

	//--------------------------------------------------------------------

}
