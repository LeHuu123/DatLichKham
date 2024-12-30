<?php
class PhieuKham extends controller
{

    protected $phieuKham;
    protected $lichHen;
    protected $benhNhan;
    protected $bacSi;


    function __construct()
    {
        $this->phieuKham = $this->model("phieuKhamModel");
        $this->lichHen = $this->model("lichHenModel");
        $this->benhNhan = $this->model("benhNhanModel");
        $this->bacSi = $this->model("bacSiModel");
    }
    function get_data()
    {
        // Truyền dữ liệu vào View
        $this->view("QuanLy/quanLy", [
            'danhSachPhieuKham' => $this->phieuKham->danhSachPhieuKham(),
            'page' => "giaoDienPhieuKham",
            'danhSachLichHen' => $this->lichHen->danhSachLichHen(),
            'danhSachBenhNhan' => $this->benhNhan->danhSachBenhNhan(),
            'danhSachBacSi' => $this->bacSi->danhSachBacSi(),
        ]);
    }

    function themPhieuKham()
    {
        if (isset($_POST["themPhieuKham"])) {
            $this->phieuKham->themPhieuKham($_POST);
            $this->get_data();
        }
    }

    function suaPhieuKham()
    {
        if (isset($_POST["suaPhieuKham"])) {
            $this->phieuKham->suaPhieuKham($_POST);
            $this->get_data();
        }
    }

    function xoaPhieuKham()
    {
        if (isset($_POST["xoaPhieuKham"])) {
            $this->phieuKham->xoaPhieuKham($_POST["maPhieuKham"]);
            $this->get_data();
        }
    }
}
