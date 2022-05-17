<?php namespace App\Controllers;

use \App\Models\UserModel;

class UserController extends BaseController
{
    public function __construct()
    {
        $this->model = new UserModel(); 
    }

	public function index()
	{	 
        $userModel = new UserModel();
        $data = $userModel->findAll();
        
		return view('user/index',['data' => $data, 'title' => 'User']);
    }
    
    public function prosesLogin()
    {
        
        return view('cms/dashboard/index');
    }

    public function addUser()
    {
        $data = [];
        return view('user/form',['data' => null,'title' => 'Add User']);
    }

    public function register()
    {
        $validation =  \Config\Services::validation();
        
        $data = [
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'repeat_password' => $this->request->getPost('repeat_password'),
        ];
        
        if($validation->run($data, 'register')) {
            $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
            //dd($data);
            $this->model->save($data);
            return redirect('admin/users');
            //return view('user/index');
        } else {
            return redirect()->route('admin/users/add');
        }
        
    }

    public function edit($id = null)
    {
        $data = $this->model->find($id);
        return view('user/form',['data' => $data]);
    }

	//--------------------------------------------------------------------

}
