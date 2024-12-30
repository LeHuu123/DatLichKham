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
                <img src="http://localhost/BTL_Dat_Lich_Kham/public/images/bacsi.jpg">
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

    <h2 style="text-align: center;">Danh sách lịch đã đặt</h2>



    <table class="schedule-table">
        <thead>
            <tr>
                <th class="stt">STT</th>
                <th class="department">Tên khoa</th>
                <th class="date">Ngày khám</th>
                <th class="time">Giờ khám</th>
                <th class="room">Phòng</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Phòng khám nội khoa</td>
                <td>2024-04-18</td>
                <td>08:00</td>
                <td>A1</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Phòng khám nhi</td>
                <td>2024-04-19</td>
                <td>09:30</td>
                <td>B2</td>
            </tr>
            <!-- Thêm dữ liệu tạm thời ở đây -->
        </tbody>
    </table>



    <footer>
        <div class="container">Code By Lê Ngọc Hùng</div>
    </footer>
</body>

</html>