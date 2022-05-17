<?php namespace App\Controllers;

use \App\Models\CompanyModel;
use \App\Models\AboutUsModel;
use \App\Models\VisiModel;
use \App\Models\MisiModel;
use \App\Models\BudayaModel;
use \App\Models\PimpinanModel;
use \App\Models\ReviewModel;
use \App\Models\GalleryModel;
use \App\Models\SettingModel;
use \App\Models\TeamModel;

class Home extends BaseController
{
	public function __construct()
    {
		$this->companyModel = new CompanyModel();
		$this->aboutUsModel = new AboutUsModel();
		$this->visiModel	= new VisiModel();
		$this->misiModel	= new MisiModel();
		$this->budayaModel = new BudayaModel();
		$this->pimpinanModel = new PimpinanModel();
		$this->reviewModel = new ReviewModel();
		$this->galleryModel = new GalleryModel();
		$this->settingModel = new SettingModel();
		$this->teamModel = new TeamModel();
	}
	
	public function index()
	{	 
		$data = $this->companyModel->getAllAp();
		$tentang_kami = $this->companyModel->where('id',0)->findAll();
		$visi = $this->visiModel->where('id_company',0)->findAll();
		$misi = $this->misiModel->where('id_company',0)->findAll();
		$teams = $this->teamModel->where('id_company',0)->findAll();
		$budaya = $this->budayaModel->findAll();
		$setting = $this->settingModel->first();
        $review = $this->reviewModel->findAll();
		$pimpinan = $this->pimpinanModel->where('id_company',0)
					->findAll();
		$gallery = $this->galleryModel->where('id_company',0)->findAll();
		$result = [
			'anak_perusahaan' => $data,
			'tentang_kami' => $tentang_kami,
			'visi' => $visi,
			'misi' => $misi,
			'review' => $review,
			'pimpinan' => $pimpinan,
			'budaya' => $budaya,
			'gallery' => $gallery,
			'setting' => $setting,
			'teams' => $teams
		];
		
		return view('web/index',['data' => $result]);
	}

	//--------------------------------------------------------------------

}
