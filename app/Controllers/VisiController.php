<?php namespace App\Controllers;

use \App\Models\VisiModel;
use \App\Models\CompanyModel;

class VisiController extends BaseController
{
    public function __construct()
    {
        $this->model = new VisiModel(); 
        $this->company_model = new CompanyModel();
    }

	public function index()
	{	 
        $visiModel = new VisiModel();
        $data = $visiModel->getVisiCompany();
        
        $title = 'Visi';
        
		return view('visi/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        $companies = $this->company_model->findAll();
        return view('visi/add',['data' => null,'title' => 'Add Pimpinan','companies' => $companies]);
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        
        try {
            $data = [
                'id_company' => $this->request->getPost('id_company'),
                'deskripsi' => $this->request->getPost('deskripsi') 
            ];
            $this->model->save($data);
            return redirect('admin/visi');  
        } catch (\Throwable $th) {
            return redirect('admin/add');  
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $companies = $this->company_model->findAll();
        
        return view('visi/edit',['data' => $data, 'title' => 'Edit Visi','companies' => $companies]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'id_company' => $this->request->getPost('id_company'),
                    'deskripsi' => $this->request->getPost('deskripsi') 
                ];
                
                //dd($data);
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/visi');
            } catch (\Throwable $th) {
                throw $th;
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}