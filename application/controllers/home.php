<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('createpost_model');
	}

	public function index()
	{
		$listpost['list'] = $this->createpost_model->get_all_post();
		$data['title'] = 'Welcome';

		$this->load->view('templates/hhd', $data);
		$this->load->view('templates/htb');
		$this->load->view('templates/hsb');
		$this->load->view('home/index', $listpost);
		$this->load->view('templates/hft');
	}
}
