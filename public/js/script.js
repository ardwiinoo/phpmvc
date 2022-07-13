$(function () {

    $('.tombolTambahData').on('click', function () {

        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Insert');

    });

    $('.tampilModalEdit').on('click', function () {

        $('#judulModal').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Update');
        $('.modal-body form').attr('action', 'http://localhost:8080/mvc_projects/phpmvc/public/mahasiswa/ubah');

        const id = $(this).data('id'); // mengambil id mhs

        $.ajax({
            url: 'http://localhost:8080/mvc_projects/phpmvc/public/mahasiswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#name').val(data.name);
                $('#nim').val(data.nim);
                $('#prodi').val(data.prodi);
                $('#email').val(data.email);
                $('#id').val(data.id);
            }
        });

    });

});