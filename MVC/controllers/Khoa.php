<?php
class Khoa extends controller
{

    protected $khoa;
    function __construct()
    {
        $this->khoa = $this->model("khoaModel");
    }

    function get_data()
    {
        $this->view("QuanLy/quanLy",  ['danhSachKhoa' =>  $this->khoa->danhSachKhoa(), 'page' => "giaoDienKhoa"]);
    }

    function themKhoa()
    {
        if (isset($_POST["themKhoa"])) {

            $this->khoa->themKhoa($_POST);
            $this->get_data();
        }
    }

    function suaKhoa()
    {
        if (isset($_POST["suaKhoa"])) {
            $this->khoa->suaKhoa($_POST);
            $this->get_data();
        }
    }

    function xoaKhoa()
    {
        if (isset($_POST["xoaKhoa"])) {
            $this->khoa->xoaKhoa($_POST["maKhoa"]);
            $this->get_data();
        }
    }
}
