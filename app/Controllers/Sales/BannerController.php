<?php namespace App\Controllers\Sales;

use \App\Models\BannerModel;
use \App\Models\CompanyModel;
use App\Controllers\BaseController;

class BannerController extends BaseController
{
    public function __construct()
    {
        $this->model = new BannerModel(); 
    }

	public function index()
	{	 
        $data = $this->model->findAll();
        $title = 'Banner';
        
		return view('sales/banner/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/banner/add',
            ['data' => null,
            'title' => 'Add Banner'
        ]);
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        
        $data = [
            'title' => $this->request->getPost('title'),
            'image' => $this->request->getPost('jabatan'),
        ];

        $image = $this->request->getFile('image');
        try {
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/sales/banner', $newName);
                $data['image'] = $newName;
            }
            
            if(!$this->model->save($data))
            {
                return redirect()->back()->with('errors', $this->model->errors());
            }
            
            return redirect('admin/sales/banner');
        } catch (\Throwable $th) {
            return redirect()->back()->withInput();
        }

       
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        return view('sales/banner/edit',['data' => $data, 'title' => 'Edit Banner']);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'title' => $this->request->getPost('title'),
                    'image' => $this->request->getPost('image'),
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['image'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('image');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/sales/banner', $newName);
                    $data['image'] = $newName;
                }
                
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/sales/banner');
            } catch (\Throwable $th) {
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $delete = $this->model->delete($id);

            if ($delete) {
                return redirect('admin/sales/banner');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

	//--------------------------------------------------------------------

}