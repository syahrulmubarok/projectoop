<div class="page-header">
<button class="btn btn-primary" data-toggle="modal" data-target="#formModalTambah" href="#">Tambah</button><p></p>

<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>	
	<tr>
		<th>No</th>
		<th>Kode Produk</th>
		<th>Nama Kategori</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
		<?php
		$no=1;
		foreach ($data->result_array() as $row) {
		?>
	<tr>		
		<td align="center"><?php echo $no; ?></td>
		<td align="center"><?php echo $row['kode_produk'] ?></td>
		<td align="center"><?php echo $row['nama_kategori'] ?></td>
		<td align="center"><?php echo $row['nama_produk'] ?></td>
		<td align="center"><?php echo $row['harga_produk'] ?></td>
		<td align="center"><a href="<?php echo site_url('admin/produk/edit'); ?>/<?php echo $row['kode_produk']?>">Ubah</a>|<a href="<?php echo site_url('admin/produk/hapus'); ?>/<?php echo $row['kode_produk']?>">Hapus</a></td>
	</tr>
		<?php
		$no++;
		}
		?>
<tbody>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="formModalTambah" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel">Tambah Produk</h3>
      </div>
      <div class="modal-body">
				<form method="post" role="form" action="<?php echo site_url('admin/produk/simpan'); ?>" onsubmit="return tambah(this)">
					<div class="input-group">	
						<label for="kode_produk">Kode Produk</label><br>
						<input type="text" name="kode_produk" id="kode_produk" placeholder="Kode produk" class="form-control">
					</div>
					<p></p>
					<div class="input-group">
					<label>Nama Kategori</label><br>
					<select name="kategori" class="form-control">
					<option value="0">Masukan Kategori</option>
						<?php foreach($kategori as $roww){
							echo "<option value=$roww->id_kategori>$roww->nama_kategori</option>";
						}
						?>
					</select>
					</div>
					<p></p>
					<div class="input-group">
					<label>Nama Produk</label><br>
					<input type="text" name="nama_produk" placeholder="Produk" class="form-control">
					</div>
					<p></p>
					<div class="input-group">
					<label>Harga Produk</label><br>
					<input type="number" name="harga_produk" placeholder="Harga Produk" class="form-control">
					</div>
					<p></p>
				
				<p></p>

			<script type="text/javascript">
				function tambah(form) {
					if (form.kode_produk.value == '') {
						alert('Kode Produk, Harus diisi');
					if (form.id_kategori.value == '') {
						alert('ID Kategori, Harus diisi');
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

					else if (form.harga_produk.value == '') {
						alert('Harga Produk, Harus diisi');
						return false;
					}
					
					else if (form.stok.value == '') {
						alert('Stok, Harus diisi');
						return false;
					}
					else{
						return true;
					}
				}
			</script>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
      </div>
    </div>	
  </div>
</div>
</div>