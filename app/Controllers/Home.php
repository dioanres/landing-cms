<?php namespace App\Controllers;

use App\Models\NotificationModel;

class Home extends BaseController
{
	public function __construct()
    {
		$this->notifModel = new NotificationModel();
		// $this->aboutUsModel = new AboutUsModel();
		// $this->visiModel	= new VisiModel();
		// $this->misiModel	= new MisiModel();
		// $this->budayaModel = new BudayaModel();
		// $this->pimpinanModel = new PimpinanModel();
		// $this->reviewModel = new ReviewModel();
		// $this->galleryModel = new GalleryModel();
		// $this->settingModel = new SettingModel();
		// $this->teamModel = new TeamModel();
	}
	
	public function index()
	{	 
		$data = [
			'notifications' => $this->notifModel->first()
		];
		
		return view('web/index', $data);
	}

	//--------------------------------------------------------------------

}
