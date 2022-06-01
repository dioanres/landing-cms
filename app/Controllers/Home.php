<?php namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\MetaTagModel;
use App\Models\ProductModel;
use App\Models\ProfileModel;
use App\Models\CustomerModel;
use App\Models\SubProductModel;
use App\Models\TestimonialModel;
use App\Models\NotificationModel;
use App\Models\ProductGroupModel;

class Home extends BaseController
{
	public function __construct()
    {
		$this->notifModel = new NotificationModel();
		$this->profileModel	= new ProfileModel();
		$this->customerModel = new CustomerModel();
		$this->bannerModel	= new BannerModel();
		$this->productModel	= new ProductModel();
		$this->testimoniModel = new TestimonialModel();
		$this->subProductModel = new SubProductModel();
		$this->productGroupModel = new ProductGroupModel();
		$this->metaTagModel	= new MetaTagModel();
	}
	
	public function index()
	{	 
		$db      = \Config\Database::connect();
		$query = $db->query("select a.*, b.name as group_name from sales_products a
		left join sales_product_groups b on b.id = a.product_group_id");
		
		$data = [
			'notifications' => $this->notifModel->first(),
			'profile'	=> $this->profileModel->first(),
			'customers'	=> $this->customerModel->findAll(),
			'banners'	=> $this->bannerModel->findAll(),
			'products'	=> $query->getResult('array'),
			'testimonials'	=> $this->testimoniModel->findAll(),
			'groups'	=> 	$this->productGroupModel->findAll(),
			'meta_tag' => $this->metaTagModel->first(),
		];

		$data['socmed'] = isset($data['profile']['meta_socmed']) ? json_decode($data['profile']['meta_socmed']) : null;
		
		return view('web/index', $data);
	}

	public function send_message()
	{
		$name = $this->request->getPost('name');
		$question = $this->request->getPost('question');
		$profile = $this->profileModel->first();
		$socmed = \json_decode($profile['meta_socmed']);
		$url = 'https://wa.me/'.$socmed->whatsapp.'?text='.urlencode($question);

		return redirect()->to($url);
	}

	public function all_products()
	{
		$data = [
			'profile'	=> $this->profileModel->first(),
			'products'	=> $this->productModel->findAll(),
		];

		$data['socmed'] = json_decode($data['profile']['meta_socmed']);

		return view('web/all_products', $data);
	}

	public function get_sub_products($product_id)
	{
		$data = $this->subProductModel->where('product_id', $product_id)->findAll();
		$product = $this->productModel->where('id', $product_id)->first();
		$response = [
			'success' => true,
			'data' => $data,
			'product' => $product,
		];
		
		return $this->response->setJSON($response);
	}

	//--------------------------------------------------------------------

}
