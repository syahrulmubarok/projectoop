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
            url: 'http://localhost/web/projectoop/kategori/ubah',
            data: {id : id_kategori},
            method: 'post',
            
            success: function(data){
                    console.log(data);
            }
        })
       

    })

} );