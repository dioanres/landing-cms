<?php namespace App\Controllers\Sales;

use \App\Models\ProductModel;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->model = new ProductModel(); 
    }

	public function index()
	{	 
        $data = $this->model->findAll();
        $title = 'Product';
        
		return view('sales/product/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/product/add',
            ['data' => null,
            'title' => 'Add Product'
        ]);
    }

    public function save()
    {   
        $data = [
            'name' => $this->request->getPost('name'),
            'desc' => $this->request->getPost('desc'),
            'image' => $this->request->getPost('image'),
            'price' => $this->request->getPost('price'),
            'meta' => $this->request->getPost('meta'),
        ];

        $image = $this->request->getFile('image');
        try {
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/sales/product', $newName);
                $data['image'] = $newName;
            }
            
            if($this->model->save($data) == true)
            {
                return redirect('admin/sales/product');
            }

            return redirect()->back()->with('errors', $this->model->errors());
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        return view('sales/product/edit',['data' => $data, 'title' => 'Edit Product']);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'desc' => $this->request->getPost('desc'),
                    'image' => $this->request->getPost('image'),
                    'price' => $this->request->getPost('price'),
                    'meta' => $this->request->getPost('meta'),
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['image'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('image');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/sales/product', $newName);
                    $data['image'] = $newName;
                }
                
                if ($this->model->update($this->request->getPost('id'),$data)){
                    return redirect('admin/sales/product');
                };

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
                return redirect('admin/sales/product');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

	//--------------------------------------------------------------------

}