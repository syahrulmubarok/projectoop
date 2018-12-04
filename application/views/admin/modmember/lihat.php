<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal" href="#">Tambah</button>
<p></p>
<table width="100%" class="table table-striped table-bordered table-hover">
<thead>
	<tr>
		<th>ID Member</th>
		<th>Nama Lengkap</th>
		<th>Email</th>
		<th>No HP</th>
		<th>Alamat</th>
		<th>Aksi</th>
		
	</tr>
</thead>
<tbody>
		<?php
		$no=1;
		foreach ($data->result_array() as $row) {
		?>
	<tr>		
		<td align="center"><?php echo $row['id_member'] ?></td>
		<td align="center"><?php echo $row['nama_lengkap'] ?></td>
		<td align="center"><?php echo $row['email'] ?></td>
		<td align="center"><?php echo $row['no_hp'] ?></td>
		<td align="center"><?php echo $row['alamat'] ?></td>
		<td align="center"><a data-toggle="modal" data-target="#formModal" href="#" class="ubahKategori" data-id="<?php echo $row['id_member'] ?>">Ubah</a>|<a href="<?php echo site_url('kategori/hapus'); ?>/<?php echo $row['id_member']?>">Hapus</a></td>
	</tr>
		<?php
		$no++;
		}
		?>
</tbody>
</table>
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
