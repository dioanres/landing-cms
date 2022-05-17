<?php namespace App\Controllers;

use \App\Models\ReviewModel;
use \App\Models\CompanyModel;

class ReviewController extends BaseController
{
    public function __construct()
    {
        $this->model = new ReviewModel(); 
        $this->company_model = new CompanyModel();
    }

	public function index()
	{	 
        $reviewModel = new ReviewModel();
        $data = $this->model->getReviewCompany();
        
        $title = 'Client';
        
		return view('review/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        $companies = $this->company_model->findAll();
        return view('review/add',['data' => null,'title' => 'Add Review','companies' => $companies]);
    }

    public function save()
    {
        try {
            $data = [
                'id_company' => $this->request->getPost('id_company'),
                'title' => $this->request->getPost('title'),
                'deskripsi' => $this->request->getPost('deskripsi'),
            ];
            $image = $this->request->getFile('image');
    
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/review', $newName);
                $data['image'] = $newName;
            }
            $this->model->save($data);
    
            return redirect('admin/review');
        } catch (\Throwable $th) {
            throw $th;
            return view('review/form');
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $companies = $this->company_model->findAll();
        
        return view('review/edit',['data' => $data, 'title' => 'Edit review','companies' => $companies]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'id_company' => $this->request->getPost('id_company'),
                    'title' => $this->request->getPost('title'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                ];
                //dd($data);
                if($this->request->getPost('image_existing')){
                    $data['image_existing'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('image');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/review', $newName);
                    $data['image'] = $newName;
                }
                //dd($data);
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/review');
            } catch (\Throwable $th) {
                throw $th;
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}