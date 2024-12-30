<?php
class BenhNhan extends controller
{
 
    protected $benhNhan;
    function __construct()
    {
        $this->benhNhan = $this->model("benhNhanModel");
    }

    function get_data()
    {
        $this->view("QuanLy/quanLy",  ['danhSachBenhNhan' =>  $this->benhNhan->danhSachBenhNhan() , 'page' => "giaoDienBenhNhan" ]  );
    }

    function themBenhNhan()
    {
        if (isset($_POST["themBenhNhan"])) {
            $this->benhNhan->themBenhNhan($_POST);
           $this ->get_data();

        }
    }

    function suaBenhNhan()
    {
        if (isset($_POST["suaBenhNhan"])) {
            $this->benhNhan->suaBenhNhan($_POST);
           $this ->get_data();

        }
    }

    function xoaBenhNhan()
    {
        if (isset($_POST["xoaBenhNhan"])) {
            $this->benhNhan->xoaBenhNhan($_POST["maBenhNhan"]);
           $this ->get_data();

        }
    }
}
