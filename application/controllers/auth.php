<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	private $page 		= "Data Admin";
	private $redirect 	= "admin";
	private $template 	= "";

	public function __construct(){
		parent::__construct();

		//Load model
		$this->load->model('M_auth');
	}

	public function index(){

		$data = array(
					'page'		=> $this->page,
					'subpage' 	=> 'Read',
					'data' 		=> ''
					);
		$this->load->view('admin/login', $data);
	}

public function login(){
		$id 	= $this->input->post('kode_admin');
		$pwd	= md5($this->input->post('pswd_admin'));
		$data 	= $this->M_auth->CekLogin('admin','kode_admin',$id);
		
		if($data['pswd_admin'] == $pwd){

			
			$array = array(
				'kode_admin' 	=> $data['kode_admin'],
				'nama_admin' 	=> $data['nama_admin'],
				'IsAdmin'		=> 1
			);
				$this->session->set_userdata($array);

				//$this->session->set_flashdata($this->config->item('flash_name'), $this->config->item('flash_welcome'));

				
				redirect('admin','refresh');	
			
		}
		else{

			//$this->session->set_flashdata($this->config->item('flash_name'), $this->config->item('flash_login'));
			
			redirect('auth','refresh');

		}
	}

	public function logout(){
		
		$this->session->sess_destroy();

		//$this->session->set_flashdata($this->config->item('flash_name'), $this->config->item('flash_login'));

		redirect('auth','refresh');

	}
	

	

}