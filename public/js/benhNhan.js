
$(document).ready(function () {
    $('.edit').on('click', function () {


        var id = $(this).data('id'); // Lấy dữ liệu
        var hoten = $(this).data('hoten');

        var sodienthoai = $(this).data('sodienthoai');
        var gioitinh = $(this).data('gioitinh');
        var ngaysinh = $(this).data('ngaysinh');
        var dantoc = $(this).data('dantoc');
        var nghe = $(this).data('nghe');
        var email = $(this).data('email');
        var diachi = $(this).data('diachi');

        // Cập nhật dữ liệu vào form trong modal

        $('#editEmployeeModal').find('[name="maBenhNhan"]').val(id);
        $('#editEmployeeModal').find('[name="hoTen"]').val(hoten);
        $('#editEmployeeModal').find('[name="soDienThoai"]').val(sodienthoai);
        $('#editEmployeeModal').find('[name="gioiTinh"]').val(gioitinh);
        $('#editEmployeeModal').find('[name="ngaySinh"]').val(ngaysinh);
        $('#editEmployeeModal').find('[name="danToc"]').val(dantoc);
        $('#editEmployeeModal').find('[name="ngheNghiep"]').val(nghe);
        $('#editEmployeeModal').find('[name="email"]').val(email);
        $('#editEmployeeModal').find('[name="diaChi"]').val(diachi);
        $('#editEmployeeModal').modal('show'); // Hiển thị modal
    });
});

$(document).ready(function () {
    $('.delete').on('click', function () {

        var id = $(this).data('id'); // Lấy dữ liệu


        $('#deleteEmployeeModal').find('[name="maBenhNhan"]').val(id);
        $('#deleteEmployeeModal').modal('show'); // Hiển thị modal
    });
});


