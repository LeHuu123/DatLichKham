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
                <img src="http://localhost/BTL_Dat_Lich_Kham/public/images/bacsi.png">
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
        <h1>Thông Tin Bệnh Nhân</h1>
        <form action="submit.php" method="POST">

            <div class="form-group">
                <label for="MaBn">Mã Bệnh Nhân:</label>
                <input value="1" type="text" id="MaBn" name="mabn" required value="1">
            </div>
            <div class="form-group">
                <label for="name"><i class="fa-solid fa-file-signature"></i> Họ và Tên:</label>
                <input value="khanh dan" type="text" id="name" name="ten" required>
            </div>

            <div class="form-group">
                <label for="dob"><i class="fa-solid fa-calendar-days"></i> Ngày Sinh:</label>
                <input value="" type="date" id="dob" name="ngaySinh" required>
            </div>

            <div class="form-group">
                <label for="gender"><i class="fa-solid fa-genderless"></i> Giới Tính:</label>
                <select id="gender" name="gioiTinh" required>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                    <option value="Khác">Khác</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address"><i class="fa-solid fa-location-dot"></i> Địa Chỉ:</label>
                <input value="ha noi" type="text" id="address" name="diaChi" required>
            </div>

            <div class="form-group">
                <label for="phone"><i class="fa-solid fa-phone"></i> Số Điện Thoại:</label>
                <input value="1561" type="number" id="phone" name="sdt" required>
            </div>

            <div class="form-group">
                <label for="mail"><i class="fa-solid fa-envelope"></i> Email:</label>
                <input value="khanh@gmail.com" type="email" id="mail" name="email" required>
            </div>

            <div class="form-group">
                <label for="job"><i class="fa-solid fa-user-doctor"></i> Nghề Nghiệp:</label>
                <input value="ban dam" type="text" id="job" name="ngheNghiep" required>
            </div>

            <div class="form-group">
                <label for="dantoc"><i class="fa-solid fa-face-smile"></i> Dân Tộc:</label>
                <input value="kinh" type="text" id="dantoc" name="danToc" required>
            </div>

            <div class="form-group">
                <input type="submit" value="Sửa">
            </div>
        </form>
    </div>



    <footer>
        <div class="container">Code By Lê Ngọc Hùng</div>
    </footer>
</body>

</html>