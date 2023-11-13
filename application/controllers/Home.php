<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}
	
	public function index()
	{

		$this->load->model('BannerModel');
		$this->load->model('MasterQuotesModel');

		$data['title'] = 'Home';
		$data['banners'] = $this->BannerModel->GetAll();
		$data['quotes'] = $this->MasterQuotesModel->GetAll();

		// print_r($this->session->userdata('logged_in_foundation'));
		// exit(1);
		$this->load->view('home', $data);
	}

}
