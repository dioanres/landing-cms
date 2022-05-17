<?php namespace App\Controllers;

use \App\Models\SettingModel;

class SettingController extends BaseController
{
    public function __construct()
    {
        $this->model = new SettingModel();
    }

	public function index()
	{	 
        $settingModel = new SettingModel();
        $data = $settingModel->findAll();
        $title = 'Setting';
        
		return view('setting/index',['data' => $data, 'title' => $title]);
    }

    public function add()
    {   
        $companies = $this->company_model->findAll();
        return view('setting/add',['data' => null,'title' => 'Add Pimpinan','companies' => $companies]);
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        
        $data = [
            'nama' => $this->request->getPost('nama'),
            'jabatan' => $this->request->getPost('jabatan'),
            'id_company' => $this->request->getPost('id_company')
        ];
        $foto = $this->request->getFile('foto');
        if($validation->run($data, 'pimpinan')) {
            if(!empty($foto->getName())) {
                $newName = $foto->getRandomName();
                $foto->move('upload/foto', $newName);
                $data['foto'] = $newName;
            }
            $this->model->save($data);
            return redirect('admin/pimpinan');
            //return view('user/index');
        } else {
            return view('pimpinan/form');
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
    
        return view('setting/edit',['data' => $data, 'title' => 'Edit Setting']);
    }

    public function update()
    {
        $validation =  \Config\Services::validation();
        if($this->request->getPost('id')) {
            try {
                $data = [];
                
                if($this->request->getPost('meta_icon_existing')){
                    $data['meta_icon_existing'] = $this->request->getPost('meta_icon_existing');
                }
                if($this->request->getPost('video_existing')){
                    $data['video_existing'] = $this->request->getPost('video_existing');
                }
                if($this->request->getPost('doc_cp_existing')){
                    $data['doc_cp_existing'] = $this->request->getPost('doc_cp_existing');
                }

                $file = $this->request->getFile('meta_icon');
                $doc_cp = $this->request->getFile('doc_cp');
                $video = $this->request->getFile('video');
                
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/setting', $newName);
                    $data['meta_icon'] = $newName;
                }
                
                if(!empty($doc_cp->getName())) {
                    $newNameCp = $doc_cp->getRandomName();
                   
                    //dd($newNameCp,$doc_cp->move('upload/setting', $newNameCp));
                    $doc_cp->move('upload/setting', $newNameCp);
                    $data['doc_cp'] = $newNameCp;
                }
                //dd($file,$doc_cp,$video,$data);
                if(!empty($video->getName())) {
                    $video_validation = $this->validate([
                        'video' => [
                            'uploaded[video]',
                            'mime_in[video,video/mp4,video/quicktime,video/3gpp]',
                            'max_size[video,2048]',
                        ],
                    ]);
    
                    if($video_validation) {
                        if(!empty($video->getName())) {
                            $newNameVideo = $video->getRandomName();
                            $video->move('upload/setting', $newNameVideo);
                            $data['video'] = $newNameVideo;
                        }
                    } else {
                        session()->setFlashdata('errors', 'Video file is not valid');
                        return redirect()->back()->withInput('error',$video_validation);
                    }
                }
                
                //dd($data);
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/setting');
            } catch (\Throwable $th) {
                throw $th;
                return redirect()->back()->with('error',$th);
            }
        }
        return redirect()->back();
    }

	//--------------------------------------------------------------------

}