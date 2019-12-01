<?php
class Createpost_model extends CI_Model
{

	//fungsi untuk menyimpan data artikel kedalam database
	function Simpan_post($judul, $label, $isi, $post_slug, $gambar)
	{
		$data = [
			'post_title' => $judul,
			'post_label' => $label,
			'post_body'  => $isi,
			'post_slug'  => $post_slug,
			'post_img'   => $gambar
		];
		$hsl = $this->db->insert('posts', $data);
		return $hsl;
	}

	//fungsi untuk menampilkan data post berdasarkan slug
	function getPostById($post_slug)
	{
		if ($post_slug === FALSE) {
			$query = $this->db->get('posts');

			return $query->result_array();
		}

		$query = $this->db->get_where('posts', array('post_slug' => $post_slug));

		return $query->row_array();
	}

	//fungsi untuk menampilkan semua post pada list
	function get_all_post()
	{
		$this->db->limit(10);
		$this->db->order_by('post_id', 'desc');
		return $this->db->get('posts');
	}
}
