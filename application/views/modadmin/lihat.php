<a href="<?php echo site_url('admin/tambah'); ?>" title="Tambah" style="text-decoration: none;"><input type="button" value="Tambah" class="btn btn-primary"></a><p></p>

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
		<td align="center"><a href="<?php echo site_url('admin/edit'); ?>/<?php echo $row['kode_admin']?>">Ubah</a>|<a href="<?php echo site_url('admin/hapus'); ?>/<?php echo $row['kode_admin']?>">Hapus</a></td>
	</tr>
		<?php
		$no++;
		}
		?>
</tbody>
</table>
