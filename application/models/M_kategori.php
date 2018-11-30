<?php 
defined('BASEPATH') OR exit('No direct script access allowes');
/**
 * 
 */
class M_kategori extends CI_model
{
	
	public function GetAll()
	{
		return $this->db->query("Select*From kategori order by id_kategori asc");
	}

	public function simpan($data)
	{
		return $this->db->insert('kategori', $data);
	}

}

?>