<?php namespace App\Controllers\Sales;

use \App\Models\NotificationModel;
use App\Controllers\BaseController;

class NotificationController extends BaseController
{
    public function __construct()
    {
        $this->model = new NotificationModel(); 
    }

	public function index()
	{	 
        $data = $this->model->findAll();
        $title = 'Notification';
        
		return view('sales/notification/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/notification/add',
            ['data' => null,
            'title' => 'Add Notification'
        ]);
    }

    public function save()
    {   
        $data = [
            'desc' => $this->request->getPost('desc'),            
            'image' => $this->request->getPost('image'),
        ];

        $image = $this->request->getFile('image');
        try {
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/sales/notification', $newName);
                $data['image'] = $newName;
            }
            
            if($this->model->save($data) == true)
            {
                return redirect('admin/sales/notification');
            }

            return redirect()->back()->with('errors', $this->model->errors());
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        return view('sales/notification/edit',['data' => $data, 'title' => 'Edit notification']);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'desc' => $this->request->getPost('desc'),            
                    'image' => $this->request->getPost('image'),
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['image'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('image');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/sales/notification', $newName);
                    $data['image'] = $newName;
                }
                
                if ($this->model->update($this->request->getPost('id'),$data) == true) {
                    return redirect('admin/sales/notification');
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
                return redirect('admin/sales/notification');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }

	//--------------------------------------------------------------------

}