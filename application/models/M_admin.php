<?php 
defined('BASEPATH') OR exit('No direct script access allowes');
/**
 * 
 */
class M_admin extends CI_model
{
	
	public function GetAll()
	{
		return $this->db->query("select*from admin order by kode_admin desc");
	}

	public function simpan($data)
	{
		return $this->db->insert('admin', $data);
	}
	
	public function ambil_data($field, $value)
	{
		$this->db->where($field, $value);
		return $this->db->get('admin');
	}

	public function update($kode_admin,$post)
	{
		$this->db->where('kode_admin', $kode_admin);
		$this->db->update('admin', $post);
		return $this->db->affected_rows();
	}
	
	public function hapus($kode_admin)
	{
		$this->db->where('kode_admin', $kode_admin);
		$this->db->delete('admin');
		return $this->db->affected_rows();
	}
}

?>