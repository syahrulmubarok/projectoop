<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

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
		$this->load->view('portal/template/header', $data);
		$this->load->view('portal/tampilproduk/lihat', $data);
		$this->load->view('portal/template/footer', $data);

	}
}