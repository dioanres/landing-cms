<?php namespace App\Controllers\Sales;

use App\Models\MetaMenuModel;
use App\Controllers\BaseController;

class MetaMenuController extends BaseController
{
    public function __construct()
    {
        $this->model = new MetaMenuModel(); 
    }

	public function index()
	{	 
        $data = $this->model->findAll();
        $title = 'Meta Menu';
        
		return view('sales/meta_menu/index', ['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/meta_menu/add',
            ['data' => null,
            'title' => 'Add Meta'
        ]);
    }

    public function save()
    {   
        $data = [
            'title' => $this->request->getPost('title'),
            'meta' => $this->request->getPost('meta'),
        ];

        try {
            if($this->model->save($data) == true)
            {
                return redirect('admin/sales/meta_menu');
            }

            return redirect()->back()->with('errors', $this->model->errors());
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $meta = json_decode($data['meta'], true);
        
        return view('sales/meta_menu/edit',['data' => $data, 'title' => 'Edit Meta Menu', 'meta' => $meta]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'meta' => json_encode($this->request->getPost()),
                ];
                
                if($this->model->update($this->request->getPost('id'),$data))
                {
                    return redirect('admin/sales/meta_menu');
                } 
                
                return redirect()->back()->with('errors', $this->model->errors());
            } catch (\Throwable $th) {
                return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
            }
        }

        return redirect()->back();
    }

	//--------------------------------------------------------------------

}