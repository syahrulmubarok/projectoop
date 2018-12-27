<div class="page-header">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModalTambah" href="#">Tambah</button>
<p></p>
<table width="100%" class="table table-striped table-bordered table-hover">
<thead>
	<tr>
		<th>ID Kategori</th>
		<th>Nama Kategori</th>
		<th>Aksi</th>
	</tr>
</thead>
<tbody>
		<?php
		$no=1;
		foreach ($data->result_array() as $row) {
		?>
	<tr>		
		<td align="center"><?php echo $row['id_kategori'] ?></td>
		<td align="center"><?php echo $row['nama_kategori'] ?></td>
		<td align="center"><a href="<?php echo site_url('admin/kategori/edit'); ?>/<?php echo $row['id_kategori']?>">Ubah</a> | <a href="<?php echo site_url('admin/kategori/hapus'); ?>/<?php echo $row['id_kategori']?>">Hapus</a></td>
	</tr>
		<?php
		$no++;
		}
		?>
</tbody>
</table>
</div>
<!-- Modal -->
<div class="modal fade" id="formModalTambah" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel">Tambah Kategori</h3>
      </div>
      <div class="modal-body">
				<form method="post" role="form" action="<?php echo site_url('admin/kategori/simpan'); ?>" onsubmit="return tambah(this)">
					<div class="input-group">	
						<label for="id_kategori">ID Kategori</label><br>
						<input type="text" name="id_kategori" id="id_kategori" placeholder="ID Kategori" class="form-control">
					</div>
					<p></p>
					<div class="input-group">
						<label>Nama Kategori</label><br>
						<input type="text" name="nama_kategori" placeholder="Nama Kategori" class="form-control">
					</div>
				<p></p>

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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ubah -->
<div class="modal fade" id="formModalUbah" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabelUbah">Ubah Kategori</h3>
      </div>
      <div class="modal-body">
				<form method="post" role="form" action="<?php echo site_url('kategori/edit'); ?>" onsubmit="return edit(this)">
					<div class="input-group">	
						<label for="id_kategori">ID Kategori</label><br>
						<input readonly="" type="text" name="id_kategori" class="form-control" value="<?php echo $row['id_kategori']; ?>">
					</div>
					<p></p>
					<div class="input-group">
						<label>Nama Kategori</label><br>
						<input type="text" name="nama_kategori" class="form-control" value="<?php echo $row['nama_kategori']; ?>">
					</div>
				<p></p>

			<script type="text/javascript">
				function edit(form) {
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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
				</form>
      </div>
    </div>
  </div>
</div>