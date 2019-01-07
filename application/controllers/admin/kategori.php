<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('M_kategori');
	}

	public function index(){
		$q = $this->M_kategori->GetAll();

		$data = array(
					'judul' => "DATA KATEGORI",
					'sub' => "Lihat",
					'data' => $q
					);
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
	//	$this->load->view('admin/template/menu', $data);
		$this->load->view('admin/modkategori/lihat', $data);
		$this->load->view('admin/template/footer', $data);

	}

	public function tambah(){
		$data = array(
					'judul' => "DATA Kategori",
					'sub' => "Tambah",
					'data' => ''
					);
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
	//	$this->load->view('admin/template/menu', $data);
		$this->load->view('admin/modkategori/tambah', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function simpan(){
		$data = array(
		'nama_kategori' => $this->input->post('nama_kategori')
		);

		$this->M_kategori->simpan($data);
		redirect('admin/kategori','refresh');
	}


public function edit($id_kategori)
	{
		$query = $this->M_kategori->ambil_data('id_kategori', $id_kategori);
		$data['kategori'] = $query->row_array();
		$data['judul'] = "Edit Kategori";
		if($this->input->post()){
			$post['id_kategori'] = $this->input->post('id_kategori');
			$post['nama_kategori'] = $this->input->post('nama_kategori');

			$id_kategori = $this->M_kategori->update($id_kategori,$post);
			redirect('admin/kategori','refresh');
		}
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		$this->load->view('admin/modkategori/edit', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function hapus($id_kategori)
	{
		$this->M_kategori->hapus($id_kategori);
		redirect('admin/kategori','refresh');
	}

}