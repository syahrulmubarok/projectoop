 <div class="page-header">  
    <div class="col-md-6">
    <div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Detail Produk</h3>
    </div>
    <div class="panel-body">
        <table width="100%" class="table table-bordered table-hover" id="dataTables-example">
        <tbody>	
            <tr>
                <th>Kode Produk</th>
                <td align="center"><?php echo $produk['kode_produk'] ?></td>
            </tr>
            <tr>
                <th>Nama Produk</th>
                <td align="center"><?php echo $produk['nama_produk'] ?></td>
            </tr>
            <tr>
                <th>Nama Kategori</th>
                <td align="center"><?php echo $produk['nama_kategori'] ?></td>
            </tr>
            <tr>
                <th>Harga Produk</th>
                <td align="center"><?php echo $produk['harga_produk'] ?></td>
            </tr>
            <tr>
                <th>Gambar Produk</th>
                <td align="center"><img src="<?php echo base_url(); ?>gambar/<?php echo $produk['gambar']; ?>" width="220px" height="150px"></td>
            </tr>
        </tbody>
        </table>
    </div>
    </div>  
    </div>
</div>