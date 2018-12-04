<form method="post" role="form" action="<?php echo site_url('admin/admin/simpan'); ?>" onsubmit="return tambah(this)">
<div class="input-group">
	<label>Kode Admin</label><br>
	<input type="text" name="kode_admin" placeholder="Masukan Kode Admin" class="form-control"><p></p>
</div>
<p></p>
<div class="input-group">
	<label>Nama Admin</label><br>
	<input type="text" name="nama_admin" placeholder="Masukan Nama Lengkap" class="form-control"><p></p>
</div>
<p></p>
<div class="input-group">
	<label>Password</label><br>
	<input type="password" name="pswd_admin" placeholder="Masukan Password" class="form-control"><p></p>
</div>
<p></p>
	<input type="submit" value="Simpan" class="btn btn-success">
	<input type="reset" value="Batal" class="btn btn-danger" onClick="history.go(-1);">

</form>

<script type="text/javascript">
	function tambah(form) {
		if (form.kode_admin.value == '') {
			alert('Kode Admin, Harus diisi');
			return false;
		}

		else if (form.nama_admin.value == '') {
			alert('Nama Admin, Harus diisi');
			return false;
		}

		else if (form.pswd_admin.value == '') {
			alert('Password, Harus diisi');
			return false;
		}
		else{
			return true;
		}
	}
</script>