<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if_log_in();
		$this->load->model('Menu_model');
	}
	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		//rules
		$this->form_validation->set_rules('menu', 'Menu', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/adminheader', $data);
			$this->load->view('templates/adminsidebar', $data);
			$this->load->view('templates/admintopbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('templates/adminfooter');
		} else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success role="alert">New menu added!</div>');
			redirect('menu');
		}
	}

	public function subMenu()
	{
		$data['title'] = 'Submenu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->model('Menu_model', 'menu');
		$data['subMenu'] = $this->menu->getSubMenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		//rules
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required');
		$this->form_validation->set_rules('icon', 'icon', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/adminheader', $data);
			$this->load->view('templates/adminsidebar', $data);
			$this->load->view('templates/admintopbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/adminfooter');
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];
			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success role="alert">New sub menu added!</div>');
			redirect('menu/submenu');
		}
	}

	public function delete($id)
	{
		$this->Menu_model->deleteDatamenu($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-danger role="alert">Menu deleted!</div>');
		redirect('menu');
	}
	public function deleteSubmenu($id)
	{
		$this->Menu_model->deleteDataSubmenu($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-danger role="alert">Submenu deleted!</div>');
		redirect('menu/submenu');
	}
}
