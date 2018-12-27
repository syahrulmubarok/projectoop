<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('M_dash');
    }
    
    public function index()
    {
        $data = array(
            'admin' => $this->M_dash->GetAdmin(),
            'kategori' => $this->M_dash->GetKategori(),
            'produk' => $this->M_dash->GetProduk(),
            'member' => $this->M_dash->GetMember(),
            'judul' => 'Admin Dashboard'
            );
        
            $this->load->view('admin/template/head', $data);
            $this->load->view('admin/template/body', $data);
            //$this->load->view('admin/template/menu', $data);
            $this->load->view('admin/template/dash', $data);
            $this->load->view('admin/template/footer', $data);
    }
}