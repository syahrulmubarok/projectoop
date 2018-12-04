<form method="post" role="form" action="<?php echo site_url('kategori/simpan'); ?>" onsubmit="return tambah(this)">
<div class="input-group">	
	<label>ID Kategori</label><br>
	<input type="text" name="id_kategori" placeholder="ID Kategori" class="form-control">
</div>
<p></p>
<div class="input-group">
	<label>Nama Kategori</label><br>
	<input type="text" name="nama_kategori" placeholder="Nama Kategori" class="form-control">
</div>
	<p></p>
	<input type="submit" value="Simpan" class="btn btn-success">
	<input type="reset" value="Batal" class="btn btn-danger" onClick="history.go(-1);">
</form>

<script type="text/javascript">
	function tambah(form) {
		if (form.id_kategori.value == '') {
			alert('ID Kategori, Harus diisi');
			return false;
		}

		else if (form.nama_kategori.value == '') {
			alert('Nama Kategori, Harus diisi');
			return false;
		}

		else{
			return true;
		}
	}
</script>