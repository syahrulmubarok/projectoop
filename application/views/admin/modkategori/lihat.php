<a href="<?php echo site_url('kategori/tambah'); ?>" title="Tambah" style="text-decoration: none;"><input class="btn btn-primary" type="button" value="Tambah"></a><p></p>

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
		<td align="center"><a data-toggle="modal" data-target="#formModal" href="#">Ubah</a>|<a href="<?php echo site_url('kategori/hapus'); ?>/<?php echo $row['id_kategori']?>">Hapus</a></td>
	</tr>
		<?php
		$no++;
		}
		?>
</tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Edit Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form method="post" role="form">
				<div class="input-group">
					<label>ID Kategori</label><br>
					<input type="text" name="id_kategori" class="form-control" placeholder="Masukan Id Kategori" value="<?php echo $kategori['id_kategori']; ?>"><p></p>
				</div>
				<p></p>
				<div class="input-group">
					<label>Nama Kategori</label><br>
					<input type="text" name="id_kategori" class="form-control" placeholder="Masukan Nama Kategori" value="<?php echo $kategori['nama_kategori']; ?>"><p></p>
				</div>
				<p></p>
				<input type="submit" value="Simpan" class="btn btn-primary">
					<a href="javascript:history.back()" class="btn btn-danger">Batal</a>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>