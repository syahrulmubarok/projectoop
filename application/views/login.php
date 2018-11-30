<form action="<?php echo site_url('auth/login') ?>" method="post">
<label>Nama Pengguna</label><br>
<input type="text" name="kode_admin" value="" placeholder="Kode User">
<p></p>

<label>Kata Sandi</label><br>
<input type="password" name="pswd_admin" value="" placeholder="Masukan Kata Sandi">
<p></p>

<input type="submit" value="Login">
<input type="reset" value="Batal">
</form>