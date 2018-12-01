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
		<td align="center"><a href="<?php echo site_url('kategori/edit'); ?>/<?php echo $row['id_kategori']?>">Ubah</a>|<a href="<?php echo site_url('kategori/hapus'); ?>/<?php echo $row['id_kategori']?>">Hapus</a></td>
	</tr>
		<?php
		$no++;
		}
		?>
</tbody>
</table>
