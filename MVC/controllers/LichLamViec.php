<?php
class LichLamViec extends controller
{

    protected $lichLamViec;
    protected $bacSi;
    protected $khoa;
    function __construct()
    {
        $this->lichLamViec = $this->model("lichLamViecModel");
        $this->bacSi = $this->model("bacSiModel");
        $this->khoa = $this->model("khoaModel");
    }
 
    function get_data()
    {
        $this->view("QuanLy/quanLy",  [
            'danhSachLich' =>  $this->lichLamViec->danhSachLichLamViec(), 
            'page' => "giaoDienLichLamViec",
            'danhSachBacSi' => $this -> bacSi -> danhSachBacSi(),
            'danhSachKhoa' =>  $this->khoa->danhSachKhoa() 
        ]);

        if (isset($_GET["btnTimKiemLich"])) {
            // echo "sadsadsadsa";
            echo $_GET["maLichLamViec"];

            $ketQua = $this->lichLamViec->timKiemLich($_GET["maLichLamViec"] , $_GET["tenBacSi"]);
            
            if($ketQua["data"] == null){
                echo "<script>alert('không có dữ liệu nào hợp lí')</script>";
               $this ->  get_data();
            }
            else {
                $this->view("QuanLy/quanLy",  [
                    'danhSachLich' =>  $ketQua, 
                    'page' => "giaoDienLichLamViec",
                    'danhSachBacSi' => $this -> bacSi -> danhSachBacSi(),
                    'danhSachKhoa' =>  $this->khoa->danhSachKhoa() 
                ]);
            }

        }

       
    }
 
    function themLichLamViec()
    {
        if (isset($_POST["themLichLamViec"])) {
            $ketQua =  $this->lichLamViec->themLichLamViec($_POST);
            
            
            if($ketQua["status"] == 201){
                echo "<script>alert('Thêm thành công')</script>";
            }
            else if($ketQua["status"] == 500){
                echo "<script>alert('Thêm thất bại')</script>";
            }
            else if($ketQua["status"] == 422){
                echo "<script>alert(  '"  . $ketQua["message"]  ."')</script>";
            }
            echo "<script>window.location.href = 'http://localhost/BTL_Dat_Lich_Kham/LichLamViec';</script>";
       
        } 
    }

    function suaLichLamViec()
    {
        if (isset($_POST["suaLichLamViec"])) {
            $ketQua = $this->lichLamViec->suaLichLamViec($_POST);
            if($ketQua["status"] == 200){
                echo "<script>alert('Sửa thành công')</script>";
            }
            else if($ketQua["status"] == 500){
                echo "<script>alert('Thêm thất bại')</script>";
            }
            else if($ketQua["status"] == 422){
                echo "<script>alert(  '"  . $ketQua["message"]  ."')</script>";
            }
            echo "<script>window.location.href = 'http://localhost/BTL_Dat_Lich_Kham/LichLamViec';</script>";
        }
    }

    function xoaLichLamViec()
    {
        if (isset($_POST["xoaLichLamViec"])) {
            $ketQua =$this->lichLamViec->xoaLichLamViec($_POST["maLichLamViec"]);
            if($ketQua["status"] == 200){
                echo "<script>alert('Xóa thành công')</script>";
            }
            else if($ketQua["status"] == 500){
                echo "<script>alert('Xóa thất bại')</script>";
            }
            echo "<script>window.location.href = 'http://localhost/BTL_Dat_Lich_Kham/LichLamViec';</script>";
        }
    }

    function timKiemLichLamViec()
    {
        if (isset($_GET["btnTimKiemLich"])) {
            // echo "sadsadsadsa";
            echo $_GET["maLichLamViec"];

            $ketQua = $this->lichLamViec->timKiemLich($_GET["maLichLamViec"] , $_GET["tenBacSi"]);
            
            if($ketQua["data"] == null){
                echo "<script>alert('không có dữ liệu nào hợp lí')</script>";
               $this ->  get_data();
            }
            else {
                $this->view("QuanLy/quanLy",  [
                    'danhSachLich' =>  $ketQua, 
                    'page' => "giaoDienLichLamViec",
                    'danhSachBacSi' => $this -> bacSi -> danhSachBacSi(),
                    'danhSachKhoa' =>  $this->khoa->danhSachKhoa() 
                ]);
            }

        }
    }
}
