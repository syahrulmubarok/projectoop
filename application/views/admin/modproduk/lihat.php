<a href="<?php echo site_url('produk/tambah'); ?>" title="Tambah" style="text-decoration: none;"><input type="button" class="btn btn-primary" value="Tambah"></a><p></p>

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
		<td align="center"><a href="<?php echo site_url('produk/edit'); ?>/<?php echo $row['kode_produk']?>">Ubah</a>|<a href="<?php echo site_url('produk/hapus'); ?>/<?php echo $row['kode_produk']?>">Hapus</a></td>
	</tr>
		<?php
		$no++;
		}
		?>
<tbody>
</table>
