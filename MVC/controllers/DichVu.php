<?php
class DichVu extends controller
{

    protected $dichVu;
    protected $khoa;
    

    function __construct()
    {
        $this->dichVu = $this->model("dichVuModel");
        $this->khoa = $this->model("khoaModel");

    }

    function get_data()
    {
        $this->view("QuanLy/quanLy",  ['danhSachDichVu' =>  $this->dichVu->danhSachDichVu() , 
        'page' => "giaoDienDichVu",
        'danhSachKhoa' => $this -> khoa -> danhSachKhoa(),
        ]  );
    }

    function themDichVu()
    {
        if (isset($_POST["themDichVu"])) {
            $this->dichVu->themDichVu($_POST);
           $this ->get_data();

        }
    }

    function suaDichVu()
    {
        if (isset($_POST["suaDichVu"])) {
            $this->dichVu->suaDichVu($_POST);
           $this ->get_data();

        }
    }

    function xoaDichVu()
    {
        if (isset($_POST["xoaDichVu"])) {
            $this->dichVu->xoaDichVu($_POST["maDichVu"]);
           $this ->get_data();

        }
    }
}
