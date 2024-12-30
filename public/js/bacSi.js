$(document).ready(function () {
    $('.edit').on('click', function () {
        var id = $(this).data('id'); // Lấy dữ liệu
        var hoten = $(this).data('hoten');
        var chuyenkhoa = $(this).data('chuyenkhoa');
        var ngaysinh = $(this).data('ngaysinh');
        var gioitinh = $(this).data('gioitinh');
        var email = $(this).data('email');
        var cccd = $(this).data('cccd');
        var sodienthoai = $(this).data('sodienthoai');
        var diachi = $(this).data('diachi');
        var hocvan = $(this).data('hocvan');
        var ngayvaolam = $(this).data('ngayvaolam');
        
        

        // Cập nhật dữ liệu vào form trong modal
        $('#editEmployeeModal').find('[name="maBacSi"]').val(id);
        $('#editEmployeeModal').find('[name="hoTen"]').val(hoten);
        $('#editEmployeeModal').find('[name="chuyenKhoa"]').val(chuyenkhoa);
        $('#editEmployeeModal').find('[name="ngaySinh"]').val(ngaysinh);
        $('#editEmployeeModal').find('[name="gioiTinh"]').val(gioitinh);
        $('#editEmployeeModal').find('[name="email"]').val(email);
        $('#editEmployeeModal').find('[name="cccd"]').val(cccd);
        $('#editEmployeeModal').find('[name="soDienThoai"]').val(sodienthoai);
        $('#editEmployeeModal').find('[name="diaChi"]').val(diachi);
        $('#editEmployeeModal').find('[name="hocVan"]').val(hocvan);
        $('#editEmployeeModal').find('[name="ngayVaoLam"]').val(ngayvaolam);
        $('#editEmployeeModal').modal('show'); // Hiển thị modal
    });
});

$(document).ready(function () {
    $('.delete').on('click', function () {

        var id = $(this).data('id'); // Lấy dữ liệu

        $('#deleteEmployeeModal').find('[name="maBacSi"]').val(id);
        $('#deleteEmployeeModal').modal('show'); // Hiển thị modal
    });
});