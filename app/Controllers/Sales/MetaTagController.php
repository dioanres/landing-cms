<?php namespace App\Controllers\Sales;

use App\Models\MetaTagModel;
use App\Controllers\BaseController;

class MetaTagController extends BaseController
{
    public function __construct()
    {
        $this->model = new MetaTagModel(); 
    }

	public function index()
	{	 
        $data = $this->model->orderBy('id', 'desc')->findAll();
        $title = 'Meta Tag';
        
		return view('sales/meta_tag/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/meta_tag/add',
            ['data' => null,
            'title' => 'Add Meta Tag'
        ]);
    }

    public function save()
    {   
        $data = [
            'title' => $this->request->getPost('title'),     
            'description' => $this->request->getPost('description'), 
            'author' => $this->request->getPost('author'), 
            'keywords' => $this->request->getPost('keywords'),                    
            'icon' => $this->request->getPost('icon'),
        ];

        $icon = $this->request->getFile('icon');
        try {
            if(!empty($icon->getName())) {
                $newName = $icon->getRandomName();
                $icon->move('upload/sales/meta_tag', $newName);
                $data['icon'] = $newName;
            }
            
            if($this->model->save($data) == true)
            {
                return redirect('admin/sales/meta_tag');
            }

            return redirect()->back()->with('errors', $this->model->errors());
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        return view('sales/meta_tag/edit',['data' => $data, 'title' => 'Edit Meta Tag']);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'title' => $this->request->getPost('title'),     
                    'description' => $this->request->getPost('description'), 
                    'author' => $this->request->getPost('author'), 
                    'keywords' => $this->request->getPost('keywords'),                    
                    'icon' => $this->request->getPost('icon'),
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['icon'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('icon');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/sales/meta_tag', $newName);
                    $data['icon'] = $newName;
                }
                
                if ($this->model->update($this->request->getPost('id'),$data) == true) {
                    return redirect('admin/sales/meta_tag');
                } 
                
                return redirect()->back()->with('errors', $this->model->errors());
                
            } catch (\Throwable $th) {
                return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
            }
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $delete = $this->model->delete($id);

            if ($delete) {
                return redirect('admin/sales/meta_tag');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

	//--------------------------------------------------------------------

}