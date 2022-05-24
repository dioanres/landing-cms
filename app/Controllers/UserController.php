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
        return view('user/add',['data' => null,'title' => 'Add User']);
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
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            $save = $this->model->save($data);

            return redirect('admin/users');
        } else {
            return redirect()->back()->withInput('errors', $validation->getErrors());
        }
        
    }

    public function edit($id = null)
    {
        $data = $this->model->find($id);

        return view('user/edit',['data' => $data, 'title' => 'Edit User']);
    }

    public function update()
    {
        $validation =  \Config\Services::validation();

        if($this->request->getPost('id')) {
            try {
                $data = [
                    'username' => $this->request->getPost('username'),            
                    'password' => $this->request->getPost('password'),
                    'repeat_password' => $this->request->getPost('repeat_password'),
                ];
                
                if ($data['password']) {
                    $rule = 'update_password';
                } else {
                    $rule = 'update_user';
                }

                if ($validation->run($data, $rule)) {
                    if ($data['password']) {
                        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                    }

                    $this->model->update($this->request->getPost('id'), $data);
                    return redirect('admin/users');
                }

                return redirect()->back()->with('errors', $validation->getErrors());
                
            } catch (\Throwable $th) {
                return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
            }
        }
        
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}
