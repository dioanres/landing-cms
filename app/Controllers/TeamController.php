<?php namespace App\Controllers;

use \App\Models\TeamModel;
use \App\Models\CompanyModel;

class TeamController extends BaseController
{
    public function __construct()
    {
        $this->model = new TeamModel(); 
        $this->company_model = new CompanyModel();
    }

	public function index()
	{	 
        $teamModel = new TeamModel();
        $data = $teamModel->findAll();
        $title = 'Team';
        
		return view('team/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        $companies = $this->company_model->findAll();
        return view('team/add',['data' => null,'title' => 'Add Team','companies' => $companies]);
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
            return redirect('admin/team');
            //return view('user/index');
        } else {
            return view('team/form');
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $companies = $this->company_model->findAll();
        return view('team/edit',['data' => $data, 'title' => 'Edit Team','companies' => $companies]);
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
                return redirect('admin/team');
            } catch (\Throwable $th) {
                throw $th;
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}