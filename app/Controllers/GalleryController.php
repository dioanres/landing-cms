<?php namespace App\Controllers;

use \App\Models\GalleryModel;
use \App\Models\CompanyModel;

class GalleryController extends BaseController
{
    public function __construct()
    {   
        $this->model = new GalleryModel(); 
        $this->company_model = new CompanyModel();
    }

	public function index()
	{	 
        $galleryModel = new GalleryModel();
        $data = $galleryModel->getGalleryCompany();
        $title = 'Gallery';
        
		return view('gallery/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        $companies = $this->company_model->findAll();
        return view('gallery/add',['data' => null,
                                    'title' => 'Add Gallery',
                                    'companies' => $companies
                                    ]);
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        
        $data = [
            'title' => $this->request->getPost('title'),
            'id_company' => $this->request->getPost('id_company')
        ];
        $image = $this->request->getFile('image');

        try {
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/gallery', $newName);
                $data['image'] = $newName;
            }
            $this->model->save($data);
            return redirect('admin/gallery');
        } catch (\Throwable $th) {
            throw $th;
            return view('gallery/form');
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $companies = $this->company_model->findAll();
        return view('gallery/edit',['data' => $data, 'title' => 'Edit Gallery','companies' => $companies]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'title' => $this->request->getPost('title'),
                    'id_company' => $this->request->getPost('id_company')
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['image_existing'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('image');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/gallery', $newName);
                    $data['image'] = $newName;
                }
                //dd($data);
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/gallery');
            } catch (\Throwable $th) {
                throw $th;
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $this->model->delete($id);
            
            return redirect('admin/gallery');
        } catch (\Throwable $th) {
            throw $th;
            //dd($th);
            return redirect()->back()->with('error',$th);
        }
        
    }

	//--------------------------------------------------------------------

}