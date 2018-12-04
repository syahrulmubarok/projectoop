<?php 
defined('BASEPATH') OR exit('No direct script access allowes');
/**
 * 
 */
class M_kategori extends CI_model
{
	
	public function GetAll()
	{
		return $this->db->query("Select*from kategori");
	}

	public function simpan($data)
	{
		return $this->db->insert('kategori', $data);
	}
	public function ambil_data($field, $value)
	{
		$this->db->where($field, $value);
		return $this->db->get('kategori');
	}

	public function update($id_kategori,$post)
	{
		$this->db->where('id_kategori', $id_kategori);
		$this->db->update('kategori', $post);
		return $this->db->affected_rows();
	}
	
	public function hapus($id_kategori)
	{
		$this->db->where('id_kategori', $id_kategori);
		$this->db->delete('kategori');
		return $this->db->affected_rows();
	}
}

?>