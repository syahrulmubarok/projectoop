<div class="page-header">
<form method="post" role="form">
<div class="input-group">
	<label>ID Member</label><br>
	<input type="text" name="id_member" class="form-control" placeholder="Masukan Id Member" value="<?php echo $member['id_member']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
    <label>Nama Lengkap</label><br>
    <input type="text" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap" value="<?php echo $member['nama_lengkap']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
	<label>Email</label><br>
	<input type="text" name="email" class="form-control" placeholder="Masukan Email" value="<?php echo $member['email']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
	<label>Password</label><br>
	<input type="password" name="password_member" class="form-control" placeholder="Masukan Password" value="<?php echo $member['password_member']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
	<label>No HP</label><br>
	<input type="number" name="no_hp" class="form-control" placeholder="Masukan No HP" value="<?php echo $member['no_hp']; ?>"><p></p>
</div>
<p></p>
<div class="input-group">
	<label>Alamat</label><br>
	<input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat" value="<?php echo $member['alamat']; ?>"><p></p>
</div>
<p></p>
<input type="submit" value="Simpan" class="btn btn-primary">
	<a href="javascript:history.back()" class="btn btn-danger">Batal</a>

</form>
</div>
<script type="text/javascript">
	function tambah(form) {
		if (form.id_member.value == '') {
			alert('Id member, Harus diisi');
			return false;
		}

		else if (form.nama_member.value == '') {
			alert('Nama member, Harus diisi');
			return false;
		}
		else{
			return true;
		}
	}
</script>