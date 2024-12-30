<?php
class login extends connectDB
{
    protected $connect;
    function __construct()
    {
        $this->connect = new connectDB();
    }

    function danhSachTaiKhoan()
    {

        $headers = [
            "User-Agent: Example REST API Client",
            "Authorization: token YOUR_ACCESS_TOKEN"
        ];

        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_HTTPHEADER => $headers,
            CURLOPT_RETURNTRANSFER => true
        ]);

        curl_setopt($ch, CURLOPT_URL, "http://localhost/MVC_Api_DatLichKham/login/get_data");

        $response = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($response, true);
        return $data;
    }
}
