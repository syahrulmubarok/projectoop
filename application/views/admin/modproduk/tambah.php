<form method="post" action="<?php echo site_url('produk/simpan'); ?>" onsubmit="return tambah(this)">
<div class="input-group">
	<label>Kode Produk</label><br>
	<input type="text" name="kode_produk" placeholder="Kode Produk" class="form-control"><p></p>
	<label>ID Kategori</label><br>
	<select name="kategori" class="form-control">
	<option value="0">Masukan Kategori</option>
		<?php foreach($kategori as $row){
			echo "<option value='$row->id_kategori'>$row->nama_kategori</option>";
		}
		?>
	</select>
	<label>Nama Produk</label><br>
	<input type="text" name="nama_produk" placeholder="Produk" class="form-control"><p></p>
	<label>Harga Produk</label><br>
	<input type="number" name="harga_produk" placeholder="Harga Produk" class="form-control"><p></p>
	<label>Gambar Produk</label><br>
	<input type="file" name="gambar" ><p></p>

</div>
	<p></p>
	<input type="submit" value="Simpan" class="btn btn-success">
	<input type="reset" value="Batal" class="btn btn-danger" onclick="history.go(-1);">

</form>
