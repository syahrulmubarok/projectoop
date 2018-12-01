<form method="post" role="form">
<div class="input-group">
	<label>Id Kategori</label><br>
	<input type="text" name="id_kategori" class="form-control" placeholder="Masukan Id Kategori" value="<?php echo $admin['kode_admin']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
    <label>Nama Kategori</label><br>
    <input type="text" name="id_kategori" class="form-control" placeholder="Masukan Nama Kategori" value="<?php echo $admin['nama_admin']; ?>"><p></p>
</div>

</form>

<script type="text/javascript">
	function tambah(form) {
		if (form.id_kategori.value == '') {
			alert('Id Kategori, Harus diisi');
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