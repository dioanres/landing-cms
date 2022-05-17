<?php namespace App\Controllers;

use \App\Models\CompanyModel;
use \App\Models\VisiModel;
use \App\Models\MisiModel;
use \App\Models\PimpinanModel;
use \App\Models\BudayaModel;
use \App\Models\ReviewModel;
use \App\Models\GalleryModel;
use \App\Models\SettingModel;
use \App\Models\TeamModel;

class CompanyController extends BaseController
{
    public function __construct()
    {
        $this->model = new CompanyModel(); 
        $this->visiModel = new VisiModel();
        $this->misiModel = new MisiModel();
        $this->pimpinanModel = new PimpinanModel();
        $this->budayaModel = new BudayaModel();
        $this->reviewModel = new ReviewModel();
        $this->galleryModel = new GalleryModel();
        $this->settingModel = new SettingModel();
        $this->teamModel = new TeamModel();
    }

	public function index()
	{	 
        $companyModel = new CompanyModel();
        $data = $companyModel->findAll();
        $title = 'Anak Perusahaan';
        
		return view('anak_perusahaan/index',['data' => $data, 'title' => $title]);
    }

    public function addAp()
    {
        return view('anak_perusahaan/add',['data' => null, 'title' => 'Add Anak Perusahaan']);
    }

    public function save()
    {
        $validation =  \Config\Services::validation();
        
        $data = [
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tentang_kami' => $this->request->getPost('tentang_kami'),
            'sejarah_perusahaan' => $this->request->getPost('sejarah_perusahaan'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telpon' => $this->request->getPost('no_telpon'),
            'no_hp' => $this->request->getPost('no_hp'),
            'medsos_ig' => $this->request->getPost('medsos_ig'),
            'medsos_twitter' => $this->request->getPost('medsos_twitter'),
            'medsos_facebook' => $this->request->getPost('medsos_facebook'),
            'email' => $this->request->getPost('email'),
        ];
        
        if($validation->run($data, 'company')) {
            if($this->request->getFile('logo')) {
                $file = $this->request->getFile('logo');
                $newName = $file->getRandomName();
                $file->move('upload/logo_ap', $newName);
                $data['logo'] = $newName;
            }
            $this->model->save($data);
            return redirect('admin/anakPerusahaan');
            //return view('user/index');
        } else {
            return view('user/form');
        }
        
    }

    public function edit($id)
    {
        $data = $this->model->find($id);
        return view('anak_perusahaan/edit',['data' => $data,'title' => 'Edit Anak Perusahaan']);
    }

    public function update()
    {
        
        if($this->request->getPost('id') || $this->request->getPost('id') == 0) {
            //dd($this->request->getPost('id'));
            try {
                $data = [
                    'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
                    'deskripsi' => $this->request->getPost('deskripsi'),
                    'tentang_kami' => $this->request->getPost('tentang_kami'),
                    'sejarah_perusahaan' => $this->request->getPost('sejarah_perusahaan'),
                    'alamat' => $this->request->getPost('alamat'),
                    'no_telpon' => $this->request->getPost('no_telpon'),
                    'no_hp' => $this->request->getPost('no_hp'),
                    'medsos_ig' => $this->request->getPost('medsos_ig'),
                    'medsos_twitter' => $this->request->getPost('medsos_twitter'),
                    'medsos_facebook' => $this->request->getPost('medsos_facebook'), 
                    'email' => $this->request->getPost('email'),
                ];
                //dd($data);
                if($this->request->getPost('logo_existing')){
                    $data['logo_existing'] = $this->request->getPost('logo_existing');
                }

                $file = $this->request->getFile('logo');
                if(!empty($file->getName())) {
                    $newName = $file->getRandomName();
                    $file->move('upload/logo_ap', $newName);
                    $data['logo'] = $newName;
                }
                //dd($data);
                $this->model->update($this->request->getPost('id'),$data);
                return redirect('admin/anakPerusahaan');
            } catch (\Throwable $th) {
                throw $th;
                dd($th);
                return redirect()->back()->with('error',$th);
            }
        }
        
        return redirect()->back();
    }

    public function getDetailById($id)
    {
        $data = $this->model->find($id);
        $visi = $this->visiModel->where('id_company',$id)
                    ->findAll();
        $misi = $this->misiModel->where('id_company',$id)
                    ->findAll();
        $budaya = $this->budayaModel->findAll();
        $review = $this->reviewModel->where('id_company',$id)
                    ->findAll();
        $pimpinan = $this->pimpinanModel->whereIn('id_company',[$id,0])
                    ->findAll();
        $gallery = $this->galleryModel->where('id_company',$id)
                    ->findAll();
        $setting = $this->settingModel->first();
        $teams = $this->teamModel->where('id_company',$id)
                ->findAll();
            $result = [
            'tentang_kami' => [$data],
            'visi' => $visi,
            'budaya' => $budaya,
            'review' => $review,
            'misi' => $misi,
            'pimpinan' => $pimpinan,
            'gallery' => $gallery,
            'setting' => $setting,
            'teams' => $teams
        ];
        
        return view('web/detail',['data' => $result]);
    }

	//--------------------------------------------------------------------

}