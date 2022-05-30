<?php namespace App\Controllers\Sales;

use \App\Models\CustomerModel;
use App\Controllers\BaseController;

class CustomerController extends BaseController
{
    public function __construct()
    {
        $this->model = new CustomerModel(); 
    }

	public function index()
	{	 
        $data = $this->model->orderBy('id', 'desc')->findAll();
        $title = 'Customer Delivery';
        
		return view('sales/customer/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/customer/add',
            ['data' => null,
            'title' => 'Add Customer Delivery'
        ]);
    }

    public function save()
    {   
        $data = [
            'notes' => $this->request->getPost('notes'),            
            'image' => $this->request->getPost('image'),
        ];

        $image = $this->request->getFile('image');
        try {
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/sales/customer', $newName);
                $data['image'] = $newName;
            }
            
            if($this->model->save($data) == true)
            {
                return redirect('admin/sales/customer');
            }

            return redirect()->back()->with('errors', $this->model->errors());
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        return view('sales/customer/edit',['data' => $data, 'title' => 'Edit customer']);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'notes' => $this->request->getPost('notes'),            
                    'image' => $this->request->getPost('image'),
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['image'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('image');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/sales/customer', $newName);
                    $data['image'] = $newName;
                }
                
                if ($this->model->update($this->request->getPost('id'),$data) == true) {
                    return redirect('admin/sales/customer');
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
                return redirect('admin/sales/customer');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

	//--------------------------------------------------------------------

}