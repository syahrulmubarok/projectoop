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
		$this->load->view('template/head', $data);
		$this->load->view('template/body', $data);
	//	$this->load->view('template/menu', $data);
		$this->load->view('modkategori/lihat', $data);
		$this->load->view('template/footer', $data);

	}

	public function tambah(){
		$data = array(
					'judul' => "DATA Kategori",
					'sub' => "Tambah",
					'data' => ''
					);
		$this->load->view('template/head', $data);
		$this->load->view('template/body', $data);
	//	$this->load->view('template/menu', $data);
		$this->load->view('modkategori/tambah', $data);
		$this->load->view('template/footer', $data);
	}

	public function simpan(){
		$data = array(
		'id_kategori' => $this->input->post('id_kategori'), 
		'nama_kategori' => $this->input->post('nama_kategori')
		);

		$this->M_kategori->simpan($data);
		redirect('kategori','refresh');
	}

}
