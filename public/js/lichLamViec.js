$(document).ready(function () {
    $('.edit').on('click', function () {

        var id = $(this).data('id');

        var ngaylamviec = $(this).data('ngaylamviec');
        var thoigianbatdau = $(this).data('thoigianbatdau');
        var thoigianketthuc = $(this).data('thoigianketthuc');
        var maBacSi = $(this).data('mabacsi'); 
        var maKhoa = $(this).data('makhoa');

        // Cập nhật các trường input
        console.log(ngaylamviec);
        
        $('#suaLichLamViec').find('[name="maLichLamViec"]').val(id);
        $('#suaLichLamViec').find('[name="maBacSi"]').val(maBacSi);
        $('#suaLichLamViec').find('[name="maKhoa"]').val(maKhoa);
        $('#suaLichLamViec').find('[name="ngayLamViec"]').val(ngaylamviec);
        $('#suaLichLamViec').find('[name="thoiGianBatDau"]').val(thoigianbatdau);
        $('#suaLichLamViec').find('[name="thoiGianKetThuc"]').val(thoigianketthuc);

        $('#suaLichLamViec').modal('show');
    });
});

$(document).ready(function () {
    $('.delete').on('click', function () {

        var id = $(this).data('id'); // Lấy dữ liệu

        $('#xoaLichLamViec').find('[name="maLichLamViec"]').val(id);

        $('#xoaLichLamViec').modal('show'); // Hiển thị modal
    });
});