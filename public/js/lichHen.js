$(document).ready(function () {
    $('.edit').on('click', function () {
        // var id = $(this).data('id'); // Lấy dữ liệu
        var id = $(this).data('id'); // Lấy dữ liệu
        var maBacSi = $(this).data('mabacsi');

        var ngayHen = $(this).data('ngayhen');
        var maDichVu = $(this).data('madichvu');
        var soThuTu = $(this).data('sothutu');
        var maBenhNhan = $(this).data('mabenhnhan');
        var maKhoa = $(this).data('makhoa');

 

        // // Cập nhật dữ liệu vào form trong modal
        $('#editLichHen').find('[name="maLichHen"]').val(id);
        $('#editLichHen').find('[name="maBacSi"]').val(maBacSi);
        $('#editLichHen').find('[name="ngayHen"]').val(ngayHen);
        $('#editLichHen').find('[name="maDichVu"]').val(maDichVu);
        $('#editLichHen').find('[name="soThuTu"]').val(soThuTu);
        $('#editLichHen').find('[name="maBenhNhan"]').val(maBenhNhan);
        $('#editLichHen').find('[name="maKhoa"]').val(maKhoa);
        $('#editLichHen').modal('show'); // Hiển thị modal
      
        // $('#editEmployeeModal').find('[name="diaChi"]').val(diachi);
        // $('#editEmployeeModal').modal('show'); // Hiển thị modal
    });
});

$(document).ready(function () {
    $('.delete').on('click', function () {

        // var id = $(this).data('id'); // Lấy dữ liệu
        var id = $(this).data('id'); // Lấy dữ liệu


        $('#deleteLichHen').find('[name="maLichHen"]').val(id);
        $('#deleteLichHen').modal('show'); // Hiển thị modal

        // $('#deleteEmployeeModal').find('[name="maBenhNhan"]').val(id);
        // $('#deleteEmployeeModal').modal('show'); // Hiển thị modal
    });
});