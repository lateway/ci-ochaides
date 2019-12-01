<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
	public function index()
	{
		$listpost['list'] = $this->db->get('posts');

		$data['title'] = 'BLOG | LATEWAY';
		$this->load->view('templates/bhd', $data);
		$this->load->view('templates/btb');
		$this->load->view('blog/index', $listpost);
		$this->load->view('templates/bft');
	}

	public function view($post_slug)
	{
		$this->load->model('createpost_model');
		$post_slug = $this->uri->segment(3);
		$data['list'] = $this->createpost_model->getPostById($post_slug);

		$data['title'] = 'Lateway | ' . $this->uri->segment(3);
		$this->load->view('templates/bhd', $data);
		$this->load->view('templates/btb');
		$this->load->view('blog/viewpost', $data);
		$this->load->view('templates/bft');
	}
}
