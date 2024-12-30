<?php
class Home extends controller
{
    protected $admin;
    protected $benhNhan;

    function __construct()
    {
        $this->admin =   $this->model("login");
        $this->benhNhan =   $this->model("benhNhanModel");
    }
    function Get_data()
    {
        $this->view("QuanLy/login");

        // $this -> view("QuanLy/BenhNhan/danhSachBenhNhan" , ["danhSachBenhNhan" => $this -> benhNhan -> danhSachBenhNhan() ] );
    }

    function checkLogin()
    {
        // var_dump( $this -> benhNhan -> danhSachBenhNhan());
        $data = $this->admin->danhSachTaiKhoan()["data"];
        if (isset($data)) {
            if (!empty($data)) {
                $username =  $data[0]["username"];
                $password =  $data[0]["password"];
                if (isset($_POST["btnLogin"])) {
                    $user = $_POST["username"];
                    $pas = $_POST["password"];
                    if ($username === $user && $password === $pas) {
                            $this->view("QuanLy/quanLy" ,  ['danhSachBenhNhan' => $this -> benhNhan -> danhSachBenhNhan() , 'page' => "giaoDienBenhNhan"] );
                    } else {
                         $this->view("QuanLy/login");
                         echo  "<script> alert('Đăng nhập thất bại!')  </script>";
                    }
                }
            }
        } else {
            echo  "<script> alert('Đăng nhập thất bại!')  </script>";
             $this->view("QuanLy/login");
        }
        // echo "<pre>";
        // print_r($getData);
        // echo "</pre>";

    }
}
