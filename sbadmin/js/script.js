$(function(){

    $('.tombolTambahKategori').on('click', function(){
        $('#formModalLabel').html('Tambah Kategori');
        $('.modal-footer button[type=submit]').html('Tambah Data')

    })

    $('.ubahKategori').on('click', function(){
        
        $('#formModalLabel').html('Ubah Kategori');
        $('.modal-footer button[type=submit]').html('Ubah Data')

        const id_kategori = $(this).data('id_kategori');

        $.ajax({
            url: 'http://localhost/web/projectoop/kategori/getubah',
            data: {id_kategori : id_kategori},
            method: 'post',
            dataType: 'json',
            success: function(data){
                    console.log(data);
            }
        })
       

    })

} );