<form method="post" action="<?php echo site_url('produk/simpan'); ?>" onsubmit="return tambah(this)">
<div class="input-group">
	<label>Kode Produk</label><br>
	<input type="text" name="kode_produk" placeholder="Kode Produk" class="form-control"><p></p>
	<label>ID Kategori</label><br>
	<input type="text" name="id_kategori" placeholder="ID Kategori" class="form-control"><p></p>
    <label>Nama Produk</label><br>
	<input type="text" name="nama_produk" placeholder="Produk" class="form-control"><p></p>
	<label>Harga Produk</label><br>
	<input type="text" name="harga_produk" placeholder="Harga Produk" class="form-control"><p></p>
</div>
	<p></p>
	<input type="submit" value="Simpan" class="btn btn-success">
	<input type="reset" value="Batal" class="btn btn-danger" onclick="history.go(-1);">

</form>

<script type="text/javascript">
	function tambah(form) {
		if (form.kode_produk.value == '') {
			alert('Kode Produk, Harus diisi');
			return false;
		}

		else if (form.id_kategori.value == '') {
			alert('ID Kategori, Harus diisi');
			return false;
		}

		else if (form.nama_produk.value == '') {
			alert('Nama Produk, Harus diisi');
			return false;
        }    
        else if (form.harga_produk.value == '') {
			alert('Harga Produk, Harus diisi');
			return false;
		}
		else{
			return true;
		}
	}
</script>