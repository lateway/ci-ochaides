<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if_log_in();
	}

	public function index()
	{
		$data['title'] = 'My Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/adminheader', $data);
		$this->load->view('templates/adminsidebar', $data);
		$this->load->view('templates/admintopbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/adminfooter');
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		//rules edit profile
		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/adminheader', $data);
			$this->load->view('templates/adminsidebar', $data);
			$this->load->view('templates/admintopbar', $data);
			$this->load->view('user/edit', $data);
			$this->load->view('templates/adminfooter');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			//check jika ada gambar yang akan di upload
			$upload_image = $_FILES['image'];


			if ($upload_image) {
				$config['upload_path'] = './assets/img/profile/';
				$config['allowed_types'] = 'jpg|png';
				$config['max_size']     = '2048';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
					redirect('user');
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success role="alert">Your profile has been updated !</div>');
			redirect('user');
		}
	}

	public function changePassword()
	{
		$data['title'] = 'Change Password';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		//rules current password
		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		//rules new password 1
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[6]|matches[new_password2]');
		//rules new password 2 VERFIY
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[6]|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/adminheader', $data);
			$this->load->view('templates/adminsidebar', $data);
			$this->load->view('templates/admintopbar', $data);
			$this->load->view('user/changepassword', $data);
			$this->load->view('templates/adminfooter');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password == $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">Old password incorrect. Please try again !</div>');
				redirect('user/changepassword');
			} else {
				if ($current_password == $new_password) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger role="alert">New password cannot be the sam as current password !</div>');
					redirect('user/changepassword');
				} else {
					//jika password sudah OK
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success role="alert">Password changed !</div>');
					redirect('user/changepassword');
				}
			}
		}
	}
}
