<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('M_admin');
	}

	public function index(){
		$q = $this->M_admin->GetAll();

		$data = array(
					'judul' => "DATA ADMIN",
					'sub' => "Lihat",
					'data' => $q
					);

		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		//$this->load->view('admin/template/menu', $data);
		$this->load->view('admin/modadmin/lihat', $data);
		$this->load->view('admin/template/footer', $data);
		
	}

	public function tambah(){
		$data = array(
					'judul' => "DATA Admin",
					'sub' => "Tambah",
					'data' => ''
					);
					$this->load->view('admin/template/head', $data);
					$this->load->view('admin/template/body', $data);
					//$this->load->view('admin/template/menu', $data);
					$this->load->view('admin/modadmin/tambah', $data);
					$this->load->view('admin/template/footer', $data);
	}

	public function simpan(){
		$data = array(
		'kode_admin' => $this->input->post('kode_admin'), 
		'nama_admin' => $this->input->post('nama_admin'),
		'pswd_admin' => md5($this->input->post('pswd_admin'))
		);

		$this->M_admin->simpan($data);
		redirect('admin','refresh');
	}

	public function edit($kode_admin)
	{
		$query = $this->M_admin->ambil_data('kode_admin', $kode_admin);
		$data['admin'] = $query->row_array();
		if($this->input->post()){
			$post['kode_admin'] = $this->input->post('kode_admin');
			$post['nama_admin'] = $this->input->post('nama_admin');
			$post['pswd_admin'] = md5($this->input->post('pswd_admin'));

			$kode_admin = $this->M_admin->update($kode_admin,$post);
			redirect('admin','refresh');
		}
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		$this->load->view('admin/modadmin/edit', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function hapus($kode_admin)
	{
		$this->M_admin->hapus($kode_admin);
		redirect('admin','refresh');
	}

}
