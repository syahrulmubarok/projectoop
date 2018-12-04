<?php 
defined('BASEPATH') OR exit('No direct script access allowes');
/**
 * 
 */
class M_member extends CI_model
{
	
	public function GetAll()
	{
		return $this->db->query("select*from member order by id_member asc");
	}

	public function simpan($data)
	{
		return $this->db->insert('member', $data);
	}
	
	public function ambil_data($field, $value)
	{
		$this->db->where($field, $value);
		return $this->db->get('member');
	}

	public function update($id_member,$post)
	{
		$this->db->where('id_member', $id_member);
		$this->db->update('member', $post);
		return $this->db->affected_rows();
	}
	
	public function hapus($id_member)
	{
		$this->db->where('id_member', $id_member);
		$this->db->delete('member');
		return $this->db->affected_rows();
	}
}

?>