<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('M_produk');
	}

	public function index(){
		$q = $this->M_produk->GetAll();

		$data = array(
					'judul' => "DATA PRODUK",
					'sub' => "Lihat",
					'data' => $q
					);
		$this->load->view('template/head', $data);
		$this->load->view('template/body', $data);
		//$this->load->view('template/menu', $data);
		$this->load->view('modproduk/lihat', $data);
		$this->load->view('template/footer', $data);

		

	}

	public function tambah(){
		$data = array(
					'judul' => "DATA Produk",
					'sub' => "Tambah",
					'data' => ''
					);
		$this->load->view('template/head', $data);
		$this->load->view('template/body', $data);
	//	$this->load->view('template/menu', $data);
		$this->load->view('modproduk/tambah', $data);
		$this->load->view('template/footer', $data);
	}

	public function simpan(){
		$data = array(
		'kode_produk' => $this->input->post('kode_produk'), 
		'id_kategori' => $this->input->post('id_kategori'),
		'nama_produk' => $this->input->post('nama_produk'),
		'harga_produk' => $this->input->post('harga_produk')
		);

		$this->M_produk->simpan($data);
		redirect('produk','refresh');
	}

	

}
