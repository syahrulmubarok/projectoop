<?php 
defined('BASEPATH') OR exit('No direct script access allowes');
/**
 * 
 */
class M_produk extends CI_model
{
	
	public function GetAll()
	{
		return $this->db->query("Select produk.id, produk.kode_produk, kategori.nama_kategori, produk.nama_produk, produk.harga_produk From produk, kategori WHERE kategori.id_kategori=produk.id_kategori order by kode_produk asc");
	}

	public function simpan($data)
	{
		return $this->db->insert('produk', $data);
	}

}

?>