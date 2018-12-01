<form method="post" role="form">
<div class="input-group">
	<label>Kode Admin</label><br>
	<input type="text" name="kode_admin" class="form-control" placeholder="Masukan Kode Admin" value="<?php echo $admin['kode_admin']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
    <label>Nama Admin</label><br>
    <input type="text" name="nama_admin" class="form-control" placeholder="Masukan Nama Lengkap" value="<?php echo $admin['nama_admin']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">    
    <label>Password</label><br>
	<input type="password" name="pswd_admin" class="form-control" placeholder="Masukan Password">
    </div>
    <p></p>
	<input type="submit" value="Simpan" class="btn btn-primary">
	<a href="javascript:history.back()" class="btn btn-danger">Batal</a>

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