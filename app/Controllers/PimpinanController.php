<?php namespace App\Controllers;

use \App\Models\PimpinanModel;
use \App\Models\CompanyModel;

class PimpinanController extends BaseController
{
    public function __construct()
    {
        $this->model = new PimpinanModel(); 
        $this->company_model = new CompanyModel();
    }

	public function index()
	{	 
        $pimpinanModel = new PimpinanModel();
        $data = $pimpinanModel->findAll();
        $title = 'Pimpinan';
        
		return view('pimpinan/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        $companies = $this->company_model->findAll();
        return view('pimpinan/add',['data' => null,'title' => 'Add Pimpinan','companies' => $companies]);
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'id_company' => $this->request->getPost('id_company')
        ];
        $foto = $this->request->getFile('foto');
        if($validation->run($data, 'pimpinan')) {
            if(!empty($foto->getName())) {
                $newName = $foto->getRandomName();
                $foto->move('upload/foto', $newName);
                $data['foto'] = $newName;
            }
            $this->model->save($data);
            return redirect('admin/pimpinan');
            //return view('user/index');
        } else {
            return view('pimpinan/form');
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $companies = $this->company_model->findAll();
        return view('pimpinan/edit',['data' => $data, 'title' => 'Edit Pimpinan','companies' => $companies]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'nama' => $this->request->getPost('nama'),
                    'jabatan' => $this->request->getPost('jabatan'),
                    'id_company' => $this->request->getPost('id_company')
                ];
                
                if($this->request->getPost('foto_existing')){
                    $data['foto_existing'] = $this->request->getPost('foto_existing');
                }

                $file = $this->request->getFile('foto');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/foto', $newName);
                    $data['foto'] = $newName;
                }
                //dd($data);
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/pimpinan');
            } catch (\Throwable $th) {
                throw $th;
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}