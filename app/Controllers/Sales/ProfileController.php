<?php namespace App\Controllers\Sales;

use \App\Models\ProfileModel;
use App\Controllers\BaseController;

class ProfileController extends BaseController
{
    public function __construct()
    {
        $this->model = new ProfileModel(); 
    }

	public function index()
	{	 
        $data = $this->model->findAll();
        $title = 'Profile';
        
		return view('sales/profile/index', ['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        return view('sales/profile/add',
            ['data' => null,
            'title' => 'Add Product'
        ]);
    }

    public function save()
    {   
        $data = [
            'name' => $this->request->getPost('name'),
            'job' => $this->request->getPost('job'),
            'photo' => $this->request->getPost('photo'),
            'motto' => $this->request->getPost('motto'),
            'address' => $this->request->getPost('address'),
            'phone' => $this->request->getPost('phone'),
            'logo' => $this->request->getPost('logo'),
            'email' => $this->request->getPost('email'),
            'meta_socmed' => $this->request->getPost('meta_socmed'),
        ];

        $image = $this->request->getFile('photo');
        $logo = $this->request->getFile('logo');
        try {
            if(!empty($image->getName())) {
                $newName = $image->getRandomName();
                $image->move('upload/sales/profile', $newName);
                $data['photo'] = $newName;
            }

            if(!empty($logo->getName())) {
                $newName = $logo->getRandomName();
                $logo->move('upload/sales/profile', $newName);
                $data['logo'] = $newName;
            }
            
            if($this->model->save($data) == true)
            {
                return redirect('admin/sales/profile');
            }

            return redirect()->back()->with('errors', $this->model->errors());
        } catch (\Throwable $th) {
            return redirect()->back()->with('errors', ['system' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        $socmed = json_decode($data['meta_socmed']);
        
        return view('sales/profile/edit',['data' => $data, 'title' => 'Edit Profile', 'socmed' => $socmed]);
    }

    public function update()
    {
        if($this->request->getPost('id')) {
            try {
                $socmed = [
                    'whatsapp' => $this->request->getPost('whatsapp'),
                    'instagram' => $this->request->getPost('instagram'),
                    'youtube' => $this->request->getPost('youtube'),
                    'email' => $this->request->getPost('email'),
                    'text_whatsapp' => $this->request->getPost('text_whatsapp'),
                    'url_wa'    => 'https://wa.me/'.$this->request->getPost('whatsapp').
                        '?text='.urlencode($this->request->getPost('text_whatsapp')),
                ];

                $data = [
                    'name' => $this->request->getPost('name'),
                    'job' => $this->request->getPost('job'),
                    'photo' => $this->request->getPost('photo'),
                    'motto' => $this->request->getPost('motto'),
                    'address' => $this->request->getPost('address'),
                    'phone' => $this->request->getPost('phone'),
                    'logo' => $this->request->getPost('logo'),
                    'meta_socmed' => json_encode($socmed),
                ];
                
                if($this->request->getPost('image_existing')){
                    $data['photo'] = $this->request->getPost('image_existing');
                }

                if($this->request->getPost('logo_existing')){
                    $data['logo'] = $this->request->getPost('logo_existing');
                }

                $photo = $this->request->getFile('photo');
                $logo = $this->request->getFile('logo');

                if(!empty($photo->getName())) {
                    $newName = $photo->getRandomName();
                    $photo->move('upload/sales/profile', $newName);
                    $data['photo'] = $newName;
                }

                if(!empty($logo->getName())) {
                    $newNameLogo = $logo->getRandomName();
                    $logo->move('upload/sales/profile', $newNameLogo);
                    $data['logo'] = $newNameLogo;
                }
                
                if($this->model->update($this->request->getPost('id'),$data))
                {
                    return redirect('admin/sales/profile');
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