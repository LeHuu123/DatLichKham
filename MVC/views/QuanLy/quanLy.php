<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title> ĐẶT LỊCH KHÁM </title>
    <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/Public/css/quanLy.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>
    

    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CodingLab</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="http://localhost/BTL_Dat_Lich_Kham/BenhNhan" id="chonBenhNhan">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Bệnh nhân</span>
                </a>
                <span class="tooltip">Bệnh nhân</span>
            </li>
            <li>
                <a href="http://localhost/BTL_Dat_Lich_Kham/BacSi" id="chonBacSi">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Bác sĩ</span>
                </a>
                <span class="tooltip">Bác sĩ</span>
            </li>
            <li>
                <a href="http://localhost/BTL_Dat_Lich_Kham/DichVu" id="chonDichVu">
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Dịch vụ</span>
                </a>
                <span class="tooltip">Dịch vụ</span>
            </li>
            <li>
                <a href="http://localhost/BTL_Dat_Lich_Kham/Khoa" id="chonKhoa">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Khoa</span>
                </a>
                <span class="tooltip">Khoa</span>
            </li>
            <li>
                <a href="http://localhost/BTL_Dat_Lich_Kham/LichLamViec" id="chonLichLamViec">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">Lịch làm việc</span>
                </a>
                <span class="tooltip">Lịch làm việc</span>
            </li>
            <li>
                <a href="http://localhost/BTL_Dat_Lich_Kham/LichHen" id="chonLichHen">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Lịch hẹn</span>
                </a>
                <span class="tooltip">Lịch hẹn</span>
            </li>
            <li>
                <a href="http://localhost/BTL_Dat_Lich_Kham/PhieuKham" id="chonPhieuKham">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Phiếu khám</span>
                </a>
                <span class="tooltip">Phiếu khám</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="http://localhost/BTL_Dat_Lich_Kham/upload_files/profile.jpg" alt="profileImg">
                    <div class="name_job">
                        <div class="name">Prem Shahi</div>
                        <div class="job">Web designer</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log_out"></i>
            </li>
        </ul>
    </div>
    <!-- <section class="home-section">
        <div class="text">Dashboard</div>
    </section> -->
    <script src="http://localhost/BTL_Dat_Lich_Kham/Public/js/quanLy.js"></script>

    <?php 
        if($data['page'] == "giaoDienBenhNhan"){
            include "BenhNhan/danhSachBenhNhan.php";
            return;
        }
        if($data['page'] == "giaoDienBacSi"){
            include "BacSi/danhSachBacSi.php"; 
            return;
        }
        if($data['page'] == "giaoDienDichVu"){
            include "DichVu/danhSachDichVu.php";  
            return;
        }
        if($data['page'] == "giaoDienKhoa"){
            include "Khoa/danhSachKhoa.php";
            return;
        }
        if($data['page'] == "giaoDienLichHen"){
            include "LichHen/danhSachLichHen.php";
            return;
        }
        if($data['page'] == "giaoDienLichLamViec"){
            include "LichLamViec/danhSachLichLamViec.php";
            return;
        }
        if($data['page'] == "giaoDienPhieuKham"){
            include "PhieuKham/danhSachPhieuKham.php";
            return;
        }
        
    ?>
</body>

</html>