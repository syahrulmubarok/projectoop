
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModalTambah" href="#">Tambah</button>
<p></p>

<table width="100%" class="table table-striped table-bordered table-hover">
<thead>
	<tr>
		<th>No</th>
		<th>Kode Admin</th>
		<th>Nama</th>
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
		<td align="center"><?php echo $row['kode_admin'] ?></td>
		<td align="center"><?php echo $row['nama_admin'] ?></td>
		<td align="center"><a href="<?php echo site_url('admin/admin/edit'); ?>/<?php echo $row['kode_admin']?>">Ubah</a>|<a href="<?php echo site_url('admin/admin/hapus'); ?>/<?php echo $row['kode_admin']?>">Hapus</a></td>
	</tr>
		<?php
		$no++;
		}
		?>
</tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="formModalTambah" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="formModalLabel">Tambah Admin</h3>
      </div>
      <div class="modal-body">
				<form method="post" role="form" action="<?php echo site_url('admin/admin/simpan'); ?>" onsubmit="return tambah(this)">
					<div class="input-group">	
						<label for="kode_admin">Kode Admin</label><br>
						<input type="text" name="kode_admin" id="kode_admin" placeholder="Kode Admin" class="form-control">
					</div>
					<p></p>
					<div class="input-group">
						<label>Nama Admin</label><br>
						<input type="text" name="nama_admin" placeholder="Nama admin" class="form-control">
					</div>
				<p></p>

			<script type="text/javascript">
				function tambah(form) {
					if (form.kode_admin.value == '') {
						alert('Kode Admin, Harus diisi');
						return false;
					}

					else if (form.nama_kategori.value == '') {
						alert('Nama Admin, Harus diisi');
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
