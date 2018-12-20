<?php 
defined('BASEPATH') OR exit('No direct script access allowes');
/**
 * 
 */
class M_produk extends CI_model
{
	
	public function GetAll()
	{
		return $this->db->query("Select produk.id, produk.kode_produk, kategori.id_kategori, kategori.nama_kategori, produk.nama_produk, produk.harga_produk From produk, kategori WHERE kategori.id_kategori=produk.id_kategori order by kode_produk asc");
	}

	public function simpan($data)
	{
		return $this->db->insert('produk', $data);
	}

	public function ambil_data($field, $value)
	{
		$this->db->where($field, $value);
		return $this->db->get('produk');
	}

	public function update($kode_produk,$post)
	{
		$this->db->where('kode_produk', $kode_produk);
		$this->db->update('produk', $post);
		return $this->db->affected_rows();
	}
	
	public function hapus($kode_produk)
	{
		$this->db->where('kode_produk', $kode_produk);
		$this->db->delete('produk');
		return $this->db->affected_rows();
	}

}

?>