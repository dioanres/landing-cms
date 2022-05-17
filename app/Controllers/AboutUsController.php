<?php namespace App\Controllers;

use \App\Models\AboutUsModel;

class AboutUsController extends BaseController
{
    public function __construct()
    {
        $this->model = new AboutUsModel(); 
    }

	public function index()
	{	 
        $aboutUsModel = new AboutUsModel();
        $data = $aboutUsModel->findAll();
        
		return view('about_us/index',['data' => $data,'title' => 'Tentang Kami']);
    }
    
    public function prosesLogin()
    {
        return view('cms/dashboard/index');
    }

    public function addUser()
    {
        return view('user/form',['title' => 'Add User']);
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        return view('about_us/form',['data' => $data,'title' => 'Edit Tentang Kami']);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'judul' => $this->request->getPost('judul'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'sejarah' => $this->request->getPost('sejarah')
                ];
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/aboutUs');
            } catch (\Throwable $th) {
                //dd($th);
                return redirect()->back()->with('error',$th);
                //throw $th;
            }
            
        }
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}