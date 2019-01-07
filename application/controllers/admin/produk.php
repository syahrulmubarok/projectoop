<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model(array('M_produk','M_kategori'));
		$this->load->helper(array('form', 'url'));
	}

	public function index(){
		$q = $this->M_produk->GetAll();
		$data = array(
					'judul' => "DATA PRODUK",
					'kategori' => $this->M_kategori->GetAll()->result(),
					'data' => $q
					);
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		//$this->load->view('admin/template/menu', $data);
		$this->load->view('admin/modproduk/lihat', $data);
		$this->load->view('admin/template/footer', $data);

		

	}

	public function tambah(){
		$data['kategori'] = $this->M_kategori->GetAll()->result();

		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
	//	$this->load->view('admin/template/menu', $data);
		$this->load->view('admin/modproduk/tambah', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function simpan(){
		$data['kode_produk'] = $this->input->post('kode_produk');
		$data['id_kategori'] = $this->input->post('id_kategori');
		$data['nama_produk'] = $this->input->post('nama_produk');
		$data['harga_produk'] = $this->input->post('harga_produk');
		
		$config['upload_path'] = './gambar/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size']	= '10000';
		$config['max_width']  = '1366';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('gambar'))
		{
			echo $this->upload->display_errors();	
		}
		else
		{
			$data['gambar'] = $this->upload->data()['file_name'];
		
		}
		$this->M_produk->simpan($data);
		redirect('admin/produk','refresh');
	}

	public function edit($kode_produk)
	{
		$query = $this->M_produk->ambil_data('kode_produk', $kode_produk);
		$data['produk'] = $query->row_array();
		$data['kategori'] = $this->M_kategori->GetAll()->result();
		$data['judul'] = "Edit Produk";
		if($this->input->post()){
			$post['kode_produk'] = $this->input->post('kode_produk');
			$post['id_kategori'] = $this->input->post('id_kategori');
			$post['nama_produk'] = $this->input->post('nama_produk');
			$post['harga_produk'] = $this->input->post('harga_produk');

			$config['upload_path'] = './gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '10000';
			$config['max_width']  = '1366';
			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar'))
			{
				echo $this->upload->display_errors();	
			}
			else
			{
				$post['gambar'] = $this->upload->data()['file_name'];
			
			}

			$kode_produk = $this->M_produk->update($kode_produk,$post);
			redirect('admin/produk','refresh');
		}
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		$this->load->view('admin/modproduk/edit', $data);
		$this->load->view('admin/template/footer', $data);
	}
	
	public function hapus($kode_produk)
	{
		$this->M_produk->hapus($kode_produk);
		redirect('admin/produk','refresh');
	}

	public function detail($kode_produk)
	{
		$query = $this->M_produk->ambil_data('kode_produk', $kode_produk);
		$data['produk'] = $query->row_array();
		$data['judul'] = 'Detail Produk';
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		$this->load->view('admin/modproduk/detail', $data);
		$this->load->view('admin/template/footer', $data);
	}
}
