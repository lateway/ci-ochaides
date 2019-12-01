<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if_log_in();
		$this->load->model('createpost_model');
		$this->load->library('upload');
	}

	public function index()
	{
		$data['title'] = 'DASHBOARD';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/adminheader', $data);
		$this->load->view('templates/admintopbar', $data);
		$this->load->view('templates/adminsidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/adminfooter');
	}

	public function role()
	{
		$data['title'] = 'Role';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->load->view('templates/adminheader', $data);
		$this->load->view('templates/admintopbar', $data);
		$this->load->view('templates/adminsidebar', $data);
		$this->load->view('admin/role', $data);
		$this->load->view('templates/adminfooter');
	}

	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->load->view('templates/adminheader', $data);
		$this->load->view('templates/admintopbar', $data);
		$this->load->view('templates/adminsidebar', $data);
		$this->load->view('admin/role-access', $data);
		$this->load->view('templates/adminfooter');
	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_access_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_access_menu', $data);
		} else {
			$this->db->delete('user_access_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success role="alert">Access has been changed!</div>');
	}

	public function createPost()
	{
		$data['title'] = 'CREATE POST';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/adminheader', $data);
		$this->load->view('templates/admintopbar');
		$this->load->view('templates/adminsidebar');
		$this->load->view('admin/createpost', $data);
		$this->load->view('templates/adminfooter');
	}

	function Simpan_post()
	{
		$config['upload_path'] = './assets/img/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //enkripsi nama file ketika di upload

		$this->upload->initialize($config);
		if (!empty($_FILES['postimg']['name'])) {
			if ($this->upload->do_upload('postimg')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/imd/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 200;
				$config['new_image'] = './assets/img/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$gambar = $gbr['file_name']; //ambil nama file yang terupload enkripsi
				$judul = $this->input->post('posttitle');
				$label = $this->input->post('postlabel');
				$isi = $this->input->post('postbody');

				//Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 &%|{.}=,?!*(\')"-_+$@;<>]/', '', $judul); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$post_slug = $pre_slug . '.html'; // tambahkan ektensi .html pada slug

				$this->createpost_model->simpan_post($judul, $label, $isi, $post_slug, $gambar); //simpan artikel ke database
				redirect('admin/listpost');
			} else {
				//redirect ke blog jika gambar gagal upload
				redirect('blog');
			}
		} else {
			//redirect ke blog jika gambar kosong
			redirect('blog');
		}
	}


	public function listpost()
	{
		$data['title'] = 'ALL LIST POST';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$listpost['listpost'] = $this->createpost_model->get_all_post();

		$this->load->view('templates/adminheader', $data);
		$this->load->view('templates/admintopbar', $data);
		$this->load->view('templates/adminsidebar');
		$this->load->view('admin/listpost', $listpost);
		$this->load->view('templates/adminfooter');
	}
}
