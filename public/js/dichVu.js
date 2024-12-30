$(document).ready(function () {
    $('.edit').on('click', function () {
        var id = $(this).data('id'); // Lấy dữ liệu
        var tenDichVu = $(this).data('tendichvu');
        var moTa = $(this).data('mota');
        var gia = $(this).data('gia');
        var maKhoa = $(this).data('makhoa');

        

        // Cập nhật dữ liệu vào form trong modal

      
        $('#suaDichVu').find('[name="maDichVu"]').val(id);
        $('#suaDichVu').find('[name="tenDichVu"]').val(tenDichVu);
        $('#suaDichVu').find('[name="moTa"]').val(moTa);
        $('#suaDichVu').find('[name="gia"]').val(gia);
        $('#suaDichVu').find('[name="maKhoa"]').val(maKhoa);
        $('#suaDichVu').modal('show'); // Hiển thị modal
    });
});

$(document).ready(function () {
    $('.delete').on('click', function () {

        var id = $(this).data('id'); // Lấy dữ liệu


        $('#xoaDichVu').find('[name="maDichVu"]').val(id);
        $('#xoaDichVu').modal('show'); // Hiển thị modal
    });
});