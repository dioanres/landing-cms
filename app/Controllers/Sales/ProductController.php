<?php namespace App\Controllers\Sales;

use \App\Models\ProductModel;
use App\Models\SubProductModel;
use App\Controllers\BaseController;

class ProductController extends BaseController
{
    public function __construct()
    {
        $this->model = new ProductModel(); 
        $this->sub_product = new SubProductModel();
    }

	public function index()
	{	 
        $data = $this->model->orderBy('id', 'desc')->findAll();
        $title = 'Product';
        
		return view('sales/product/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/product/add',
            ['data' => null,
            'sub_products' => [],
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
                foreach ($this->request->getPost('sub_product_name') as $key => $value) {
                    if(!$this->sub_product->save([
                        'product_id' => $this->model->insertID,
                        'sub_product_name' => $value,
                        'sub_product_price' => $this->request->getPost('sub_product_price')[$key],
                    ])) {
                        $this->model->transRollback();

                        return redirect()->back()->with('errors', $this->sub_product->errors());
                    };
                }
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
        $sub_products = $this->sub_product->where('product_id', $id)->findAll();
        
        return view('sales/product/edit',['data' => $data, 
            'sub_products' => $sub_products, 
            'title' => 'Edit Product'
        ]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            $this->model->transBegin();
            try {
                $data = [
                    'name' => $this->request->getPost('name'),
                    'desc' => $this->request->getPost('desc'),
                    'image' => $this->request->getPost('image'),
                    'price' => (double) $this->request->getPost('price'),
                    'meta' => $this->request->getPost('meta'),
                ];
                //dd($this->request->getPost());
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
                    $sub_products = $this->sub_product->where('product_id', $this->request->getPost('id'))->first();
                    if (!empty($sub_products)) {
                        $this->sub_product->where('product_id', $this->request->getPost('id'))->delete();
                        //dd($this->sub_product->where(['product_id', $this->request->getPost('id')])->findAll());
                    }
                    
                    foreach ($this->request->getPost('sub_product_name') as $key => $value) {
                        if(!$this->sub_product->save([
                            'product_id' => $this->request->getPost('id'),
                            'sub_product_name' => $value,
                            'sub_product_price' => $this->request->getPost('sub_product_price')[$key],
                        ])) {
                            $this->model->transRollback();

                            return redirect()->back()->with('errors', $this->sub_product->errors());
                        };
                    }
                    $this->model->transCommit();

                    return redirect('admin/sales/product');
                };

                return redirect()->back()->with('errors', $this->model->errors());
            } catch (\Throwable $th) {
                $this->model->transRollback();

                return redirect()->back()->with('errors', ['system' => $th->getMessage(). '/'. $th->getLine()]);
            }
        }
        $this->model->transRollback();

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