<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/public/css/DatLichKham/reset.css">
    <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/public/css/DatLichKham/base.css">
    <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/public/css/DatLichKham/style.css">
</head>

<body>
    <header class="header">
        <div class="inner-wrap">
            <div class="inner-logo">
                <img src="http://localhost/BTL_Dat_Lich_Kham/public/images/bs.png">
                <span>Hospital</span>
            </div>
            <div class="inner-menu">
                <ul>
                    <a href="@" target="_self">
                        <li><i class="fa-solid fa-house"></i> Trang Chủ</li>
                    </a>
                    <a href="http://localhost/BTL_Dat_Lich_Kham/DatLichKham/datLich" target="_blank">
                        <li><i class="fa-solid fa-book"></i> Đặt Lịch</li>
                    </a>

                    <a href="http://localhost/BTL_Dat_Lich_Kham/DatLichKham/dangKyBenhNhan" target="_blank">
                        <li> <i class="fa-solid fa-user"></i>Đăng ký bệnh nhân</li>
                    </a>
                </ul>
            </div>

            <div class="inner-social">
                <ul>
                    <li><a href="http://localhost/BTL_Dat_Lich_Kham/DatLichKham/thongTinBenhNhan" target="_blank"><img class="imgtt" src="http://localhost/BTL_Dat_Lich_Kham/public/images/ttcn.png"></a></li>
                    <li><a href="#" target="_blank"><img class="imgtt" src="http://localhost/BTL_Dat_Lich_Kham/public/images/out.png"></a></li>


                </ul>
            </div>
            <div class="icon-mobi"><i class="fa-solid fa-bars"></i></div>
        </div>
    </header>

    <div class="form-them">
        <h1>Đặt Lịch Khám Bệnh</h1>
        <form action="submit.php" method="POST">


            <div class="form-group">
                <label for="chuyenkhoa"><i class="fa-solid fa-user"></i> Chọn khoa:</label>
                <select id="chuyenkhoa" name="khoa" required>
                    <?php
                    $dataKhoa = $data["danhSachDichVu"]["data"];

                    if (isset($dataKhoa) && $dataKhoa != null) {
                        $i = 0;
                        foreach ($dataKhoa as $row) {
                    ?>
                            <option value="<?php echo $row["maDichVu"] ?>"><?php echo $row["tenDichVu"] ?></option>
                    <?php

                        }
                    }
                    ?>

                </select>
            </div>

            <div class="form-group">
                <label for="date"><i class="fa-solid fa-calendar-days"></i> Chọn Ngày:</label>
                <input type="date" id="date" name="ngay" required>
            </div>

            <div class="form-group">
                <label for="time"><i class="fa-solid fa-clock"></i> Chọn Thời Gian:</label>
                <input type="time" id="time" name="gio" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Đặt Lịch">
            </div>
        </form>
    </div>





    <footer>
        <div class="container">Code By Lê Ngọc Hùng</div>
    </footer>
</body>

</html>