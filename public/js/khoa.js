$(document).ready(function () {
    $('.edit').on('click', function () {
        var id = $(this).data('id'); // Lấy dữ liệu
        var tenkhoa = $(this).data('tenkhoa');
        var vitri = $(this).data('vitri');
        var sodienthoai = $(this).data('sodienthoai');
        

        // Cập nhật dữ liệu vào form trong modal

      
        $('#suaKhoa').find('[name="maKhoa"]').val(id);
        $('#suaKhoa').find('[name="tenKhoa"]').val(tenkhoa);
        $('#suaKhoa').find('[name="viTri"]').val(vitri);
        $('#suaKhoa').find('[name="soDienThoai"]').val(sodienthoai);
        $('#suaKhoa').modal('show'); // Hiển thị modal
    });
});

$(document).ready(function () {
    $('.delete').on('click', function () {

        var id = $(this).data('id'); // Lấy dữ liệu


        $('#xoaKhoa').find('[name="maKhoa"]').val(id);
        $('#xoaKhoa').modal('show'); // Hiển thị modal
    });
});