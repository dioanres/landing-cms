<?php namespace App\Controllers;

use \App\Models\MisiModel;
use \App\Models\CompanyModel;

class MisiController extends BaseController
{
    public function __construct()
    {
        $this->model = new MisiModel(); 
        $this->company_model = new CompanyModel();
    }

	public function index()
	{	 
        $misiModel = new MisiModel();
        $data = $misiModel->getMisiCompany();
        
        $title = 'Misi';
        
		return view('misi/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        $companies = $this->company_model->findAll();
        return view('misi/add',['data' => null,'title' => 'Add Pimpinan','companies' => $companies]);
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        
        try {
            $data = [
                'id_company' => $this->request->getPost('id_company'),
                'misi' => $this->request->getPost('misi') 
            ];
            
            $this->model->save($data);
            return redirect('admin/misi');  
        } catch (\Throwable $th) {
            throw $th;
            return redirect('admin/misi/add');  
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $companies = $this->company_model->findAll();
        
        return view('misi/edit',['data' => $data, 'title' => 'Edit Misi','companies' => $companies]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'id_company' => $this->request->getPost('id_company'),
                    'misi' => $this->request->getPost('misi') 
                ];
                
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/misi');
            } catch (\Throwable $th) {
                throw $th;
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}