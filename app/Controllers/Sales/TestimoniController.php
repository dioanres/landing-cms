<?php namespace App\Controllers\Sales;

use \App\Models\TestimonialModel;
use App\Controllers\BaseController;

class TestimoniController extends BaseController
{
    public function __construct()
    {
        $this->model = new TestimonialModel(); 
    }

	public function index()
	{	 
        $data = $this->model->findAll();
        $title = 'Testimonial';
        
		return view('sales/testimonial/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/testimonial/add',
            ['data' => null,
            'title' => 'Add Testimonial'
        ]);
    }

    public function save()
    {   
        $data = [
            'notes' => $this->request->getPost('notes'),            
            'image' => $this->request->getPost('image'),
            'name' => $this->request->getPost('name'),
        ];

        $image = $this->request->getFile('image');
        try {
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/sales/testimonial', $newName);
                $data['image'] = $newName;
            }
            
            $save = $this->model->save($data);
            
            if($this->model->save($data))
            {
                return redirect('admin/sales/testimonial');
            }
            
            return redirect()->back()->with('errors', $this->model->errors());
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = $this->model->find($id);

        return view('sales/testimonial/edit',['data' => $data, 'title' => 'Edit testimonial']);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $data = [
                    'notes' => $this->request->getPost('notes'),            
                    'image' => $this->request->getPost('image'),
                    'name' => $this->request->getPost('name'),
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['image'] = $this->request->getPost('image_existing');
                }

                $file = $this->request->getFile('image');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/sales/testimonial', $newName);
                    $data['image'] = $newName;
                }
                
                if ($this->model->update($this->request->getPost('id'),$data) == true) {
                    return redirect('admin/sales/testimonial');
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