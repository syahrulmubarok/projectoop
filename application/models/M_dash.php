<?php 
defined('BASEPATH') OR exit('No direct script access allowes');
/**
 * 
 */
class M_dash extends CI_model
{
	
	public function GetAdmin()
	{
		return $this->db->query("select*from admin");
    }
    public function GetKategori()
	{
		return $this->db->query("select*from kategori");
    }
    public function GetProduk()
	{
		return $this->db->query("select*from produk");
    }
    public function GetMember()
	{
		return $this->db->query("select*from member");
	}
}