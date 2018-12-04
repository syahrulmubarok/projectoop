<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('M_member');
	}

	public function index(){
		$q = $this->M_member->GetAll();

		$data = array(
					'judul' => "DATA MEMBER",
					'sub' => "Lihat",
					'data' => $q
					);

		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		//$this->load->view('admin/template/menu', $data);
		$this->load->view('admin/modmember/lihat', $data);
		$this->load->view('admin/template/footer', $data);
		
	}

	public function edit($id_member)
	{
        $data = array(
            'judul' => "DATA MEMBER",
            'sub' => "Edit",
            'data' => ''
            );
		$query = $this->M_member->ambil_data('id_member', $id_member);
		$data['member'] = $query->row_array();
		if($this->input->post()){
			$post['id_member'] = $this->input->post('id_member');
			$post['nama_lengkap'] = $this->input->post('nama-lengkap');
            $post['email'] = $this->input->post('email');
            $post['password_member'] = md5($this->input->post('password_member'));
            $post['no_hp'] = $this->input->post('no_hp');
            $post['alamat'] = $this->input->post('alamat');

			$id_member = $this->M_member->update($id_member,$post);
			redirect('member','refresh');
		}
		$this->load->view('admin/template/head', $data);
		$this->load->view('admin/template/body', $data);
		$this->load->view('admin/modmember/edit', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function hapus($id_member)
	{
		$this->M_member->hapus($id_member);
		redirect('member','refresh');
	}

}
