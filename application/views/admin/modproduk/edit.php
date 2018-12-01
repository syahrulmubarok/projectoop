<form method="post" role="form">
<div class="input-group">
	<label>Kode Produk</label><br>
	<input type="text" name="kode_produk" class="form-control" placeholder="Masukan Kode Produk" value="<?php echo $produk['kode_produk']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
    <label>Nama Kategori</label><br>
    <input type="text" name="nama_kategori" class="form-control" placeholder="Masukan Nama Kategori" value="<?php echo $produk['nama_kategori']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">    
    <label>Nama Produk</label><br>
	<input type="text" name="nama_produk" class="form-control" placeholder="Masukan Nama Produk" value="<?php echo $produk['nama_produk']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
    <label>Harga</label><br>
    <input type="text" name="harga" class="form-control" placeholder="Masukan Harga" value="<?php echo $produk['nama_kategori']; ?>"><p></p>
</div>
	<input type="submit" value="Simpan">
	<input type="reset" value="Batal">

</form>

<script type="text/javascript">
	function tambah(form) {
		if (form.kode_produk.value == '') {
			alert('Kode Produk, Harus diisi');
			return false;
		}

		else if (form.nama_kategori.value == '') {
			alert('Nama Kategori, Harus diisi');
			return false;
		}

		else if (form.nama_produk.value == '') {
			alert('Nama Produk, Harus diisi');
			return false;
		}

        else if (form.harga.value == '') {
			alert('Harga, Harus diisi');
			return false;
            
		}
		else{
			return true;
		}
	}
</script>