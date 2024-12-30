<?php
class bacSiModel extends connectDB
{
        protected $connect;
        function __construct()
        {
                $this->connect = new connectDB();
        }

        function danhSachBacSi()
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

                curl_setopt($ch, CURLOPT_URL, "http://localhost/MVC_Api_DatLichKham/bacSi/getdata");

                $response = curl_exec($ch);

                curl_close($ch);

                $data = json_decode($response, true);
                return $data;
        }

        function themBacSi($post)
        {

                $url = "http://localhost/MVC_Api_DatLichKham/bacSi/insertBacSi";
                // Khởi tạo cURL
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post)); // Sử dụng http_build_query để đảm bảo dữ liệu được mã hóa đúng cách
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: application/x-www-form-urlencoded' // Thiết lập Content-Type
                ));

                // Thực hiện yêu cầu POST
                $response = curl_exec($ch);
                if (!$response) {
                        die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
                }
                curl_close($ch);

                // Hiển thị phản hồi từ server
        }

        function suaBacSi($post)
        {
               
                $data = json_encode($post);
                $url = "http://localhost/MVC_Api_DatLichKham/bacSi/updateBacSi?maBacSi=" . $post['maBacSi'];
                // Khởi tạo cURL
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: application/json',
                        'Content-Length: ' . strlen($data)
                ));

                $response = curl_exec($ch);
                if (!$response) {
                        die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
                }
                curl_close($ch);

        }

        function xoaBacSi($maBacSi)
        {
                $url = "http://localhost/MVC_Api_DatLichKham/bacSi/deleteBacSi?maBacSi=" . $maBacSi;

                // Khởi tạo cURL
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); // Sử dụng DELETE
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Content-Type: application/json'
                ));

                // Thực hiện yêu cầu cURL
                $response = curl_exec($ch);
                if (!$response) {
                        die('CURL Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
                }
                curl_close($ch);

                // Xử lý phản hồi từ API, ví dụ: hiển thị thông báo hoặc chuyển hướng người dùng
        }
}
