<?php
class BacSi extends controller
{

    protected $bacSi;
    function __construct()
    {
        $this->bacSi= $this->model("bacSiModel");
    }

    function get_data()
    {
        $this->view("QuanLy/quanLy" ,  ['danhSachBacSi' => $this -> bacSi -> danhSachBacSi() , 'page' => "giaoDienBacSi" ]);
    }

    function themBacSi()
    {
        if (isset($_POST["themBacSi"])) {
           $this -> bacSi -> themBacSi($_POST);
           $this ->get_data();
        }
    }

    function suaBacSi(){
        if (isset($_POST["suaBacSi"])) {
            $this -> bacSi -> suaBacSi($_POST);
           $this ->get_data();
        }
    }

    function xoaBacSi(){
        if (isset($_POST["xoaBacSi"])) {
            $this -> bacSi -> xoaBacSi($_POST["maBacSi"] );
           $this ->get_data();
        }
    }

}
