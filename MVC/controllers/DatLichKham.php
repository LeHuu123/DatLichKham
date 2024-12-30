<?php
class DatLichKham extends controller
{
    protected $dichVu;
    protected $benhNhan;
    protected $soDienThoai;
    function __construct()
    {
        $this->benhNhan = $this->model("benhNhanModel");
        $this->dichVu = $this->model("dichVuModel");
        $this -> soDienThoai = 0;
    }

    function get_data()
    {
        if(isset($_GET['soDienThoai'])){
            $this -> soDienThoai = $_GET['soDienThoai'];
        }
        $bn = $this -> benhNhan -> timKiemBenhNhan($this -> soDienThoai);
        if(isset($bn) && $bn != null){
            $this->view("BenhNhan/giaoDienDatLich" , [
                "getBenhNhan" => $bn["data"],
            ]);
        }
        else{
            $this->view("BenhNhan/giaoDienDatLich");
        }
       
    }

    function themBenhNhan()
    {
        if (isset($_POST["themBenhNhan"])) {
            $this->benhNhan->themBenhNhan($_POST);
        }
        echo "<script>window.location.href = 'http://localhost/BTL_Dat_Lich_Kham/DatLichKham?soDienThoai=".  $_POST["soDienThoai"] ."';</script>";

    }

    function thongTinBenhNhan(){
        $this->view("BenhNhan/thongTinBenhNhan");
    }
    function datLich(){
        $this->view("BenhNhan/datLich",[
            'danhSachDichVu' =>  $this->dichVu->danhSachDichVu()
        ]);
    }
    function dangKyBenhNhan(){
        $this->view("BenhNhan/dangKyBenhNhan");
    }
    
}
