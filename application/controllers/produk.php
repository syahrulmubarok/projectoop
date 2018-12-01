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
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		//$this->load->view('admin/template/menu', $data);
		$this->load->view('admin/modproduk/lihat', $data);
		$this->load->view('admin/template/footer', $data);

		

	}

	public function tambah(){
		$data = array(
					'judul' => "DATA Produk",
					'sub' => "Tambah",
					'data' => ''
					);
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
	//	$this->load->view('admin/template/menu', $data);
		$this->load->view('admin/modproduk/tambah', $data);
		$this->load->view('admin/template/footer', $data);
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

	public function edit($kode_produk)
	{
		$query = $this->M_produk->ambil_data('kode_produk', $kode_produk);
		$data['produk'] = $query->row_array();
		if($this->input->post()){
			$post['kode_produk'] = $this->input->post('kode_produk');
			$post['id_kategori'] = $this->input->post('id_kategori');
			$post['nama_produk'] = $this->input->post('nama_produk');
			$post['harga_produk'] = $this->input->post('harga_produk');

			$kode_produk = $this->M_produk->update($kode_produk,$post);
			redirect('produk','refresh');
		}
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		$this->load->view('admin/modproduk/edit', $data);
		$this->load->view('admin/template/footer', $data);
	}
	
	public function hapus($kode_produk)
	{
		$this->M_produk->hapus($kode_produk);
		redirect('produk','refresh');
	}
}
