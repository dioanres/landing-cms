<?php namespace App\Controllers\Sales;

use App\Models\ProductGroupModel;
use App\Controllers\BaseController;

class ProductGroupController extends BaseController
{
    public function __construct()
    {
        $this->model = new ProductGroupModel();
    }

	public function index()
	{	 
        $data = $this->model->orderBy('id', 'desc')->findAll();
        $title = 'Product Group';
        
		return view('sales/product_group/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/product_group/add',
            ['data' => null,
            'title' => 'Add Product Group'
        ]);
    }

    public function save()
    {   
        $data = [
            'name' => $this->request->getPost('name'),
        ];

        try {
            if($this->model->save($data) == true)
            {
                return redirect('admin/sales/product_group');
            }

            return redirect()->back()->with('errors', $this->model->errors());
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        
        return view('sales/product_group/edit',['data' => $data, 
            'title' => 'Edit Product Group'
        ]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'name' => $this->request->getPost('name'),
                ];
                
                if ($this->model->update($this->request->getPost('id'), $data)){
                    return redirect('admin/sales/product_group');
                };

                return redirect()->back()->with('errors', $this->model->errors());
            } catch (\Throwable $th) {
                $this->model->transRollback();

                return redirect()->back()->with('errors', ['system' => $th->getMessage(). '/'. $th->getLine()]);
            }
        }

        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $delete = $this->model->delete($id);

            if ($delete) {
                return redirect('admin/sales/product_group');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

	//--------------------------------------------------------------------

}