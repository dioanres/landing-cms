<?php namespace App\Controllers;

use \App\Models\ActivityLoginModel;

class DashboardController extends BaseController
{
    public function __construct()
    {
        $this->activityModel = new ActivityLoginModel();
    }

	public function index()
	{	 
        $budayaModel = new ActivityLoginModel();
        $data = $this->activityModel->findAll();
        
        $title = 'Dashboard';
        
		return view('dashboard/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        $companies = $this->company_model->findAll();
        return view('budaya/add',['data' => null,'title' => 'Add Budaya','companies' => $companies]);
    }

    public function save()
    {
        try {
            $data = [
                'deskripsi' => $this->request->getPost('deskripsi'),
            ];
            $image = $this->request->getFile('image');
    
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/budaya', $newName);
                $data['image'] = $newName;
            }
            $this->model->save($data);
    
            return redirect('admin/budaya');
        } catch (\Throwable $th) {
            throw $th;
            return view('budaya/form');
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $companies = $this->company_model->findAll();
        
        return view('budaya/edit',['data' => $data, 'title' => 'Edit Budaya','companies' => $companies]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'deskripsi' => $this->request->getPost('deskripsi'),
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['image_existing'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('image');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/budaya', $newName);
                    $data['image'] = $newName;
                }
                //dd($data);
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/budaya');
            } catch (\Throwable $th) {
                throw $th;
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}