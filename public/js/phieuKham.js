$(document).ready(function () {
    $('.edit').on('click', function () {
        var id = $(this).data('id'); // Lấy dữ liệu

        var maLichHen = $(this).data('malichhen');
        var maBenhNhan = $(this).data('mabenhnhan');
        var maBacSi = $(this).data('mabacsi');
        var chuanDoan = $(this).data('chuandoan');
        var ngayThamKham = $(this).data('ngaythamkham');
        var ghiChu = $(this).data('ghichu');

 

        // // Cập nhật dữ liệu vào form trong modal
        $('#editPhieuKham').find('[name="maPhieuKham"]').val(id);
        $('#editPhieuKham').find('[name="maLichHen"]').val(maLichHen);
        $('#editPhieuKham').find('[name="maBenhNhan"]').val(maBenhNhan);
        $('#editPhieuKham').find('[name="maBacSi"]').val(maBacSi);
        $('#editPhieuKham').find('[name="chuanDoan"]').val(chuanDoan);
        $('#editPhieuKham').find('[name="ngayThamKham"]').val(ngayThamKham);
        $('#editPhieuKham').find('[name="ghiChu"]').val(ghiChu);
        $('#editPhieuKham').modal('show'); // Hiển thị modal
    });
});

$(document).ready(function () {
    $('.delete').on('click', function () {

        // var id = $(this).data('id'); // Lấy dữ liệu
        var id = $(this).data('id'); // Lấy dữ liệu


        $('#deletePhieuKham').find('[name="maPhieuKham"]').val(id);
        $('#deletePhieuKham').modal('show'); // Hiển thị modal

        // $('#deleteEmployeeModal').find('[name="maBenhNhan"]').val(id);
        // $('#deleteEmployeeModal').modal('show'); // Hiển thị modal
    });
});