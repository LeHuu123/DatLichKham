<?php
class LichHen extends controller
{

    protected $lichHen;
    protected $bacSi;
    protected $benhNhan;
    protected $dichVu;
    protected $khoa;

    function __construct()
    {
        $this->lichHen = $this->model("lichHenModel");
        $this->bacSi = $this->model("bacSiModel");
        $this->benhNhan = $this->model("benhNhanModel");
        $this->dichVu = $this->model("dichVuModel");
        $this->khoa = $this->model("khoaModel");
    }
    function get_data()
    {



        // Truyền dữ liệu vào View
        $this->view("QuanLy/quanLy", [
            'danhSachLichHen' => $this->lichHen->danhSachLichHen(),


            'page' => "giaoDienLichHen",
            'danhSachBacSi' => $this->bacSi->danhSachBacSi(),
            'danhSachDichVu' => $this->dichVu->danhSachDichVu(),
            'danhSachBenhNhan' => $this->benhNhan->danhSachBenhNhan(),
            'danhSachKhoa' => $this->khoa->danhSachKhoa(),




        ]);
    }

    function themLichHen()
    {

        if (isset($_POST["themLichHen"])) {
            $ketQua =  $this->lichHen->themLichHen($_POST);
            // var_dump($ketQua);
            if ($ketQua["status"] == 201) {
                echo "<script>alert('Thêm thành công')</script>";
            } else if ($ketQua["status"] == 500) {
                echo "<script>alert('Thêm thất bại')</script>";
            } else if ($ketQua["status"] == 422) {
                echo "<script>alert(  '"  . $ketQua["message"]  . "')</script>";
            }
            echo "<script>window.location.href = 'http://localhost/BTL_Dat_Lich_Kham/LichHen';</script>";
        }
    }

    function suaLichHen()
    {
        if (isset($_POST["suaLichHen"])) {
            $ketQua = $this->lichHen->suaLichHen($_POST);
            if($ketQua["status"] == 200){
                echo "<script>alert('Sửa thành công')</script>";
            }
            else if($ketQua["status"] == 500){
                echo "<script>alert('Thêm thất bại')</script>";
            }
            else if($ketQua["status"] == 422){
                echo "<script>alert(  '"  . $ketQua["message"]  ."')</script>";
            }
            echo "<script>window.location.href = 'http://localhost/BTL_Dat_Lich_Kham/LichHen';</script>";
        }
    }

    function xoaLichHen()
    {
        if (isset($_POST["xoaLichHen"])) {
            $ketQua =$this->lichHen->xoaLichHen($_POST["maLichHen"]);
            if($ketQua["status"] == 200){
                echo "<script>alert('Xóa thành công')</script>";
            }
            else if($ketQua["status"] == 500){
                echo "<script>alert('Xóa thất bại')</script>";
            }
            echo "<script>window.location.href = 'http://localhost/BTL_Dat_Lich_Kham/LichHen';</script>";
        }
    }
}
