<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/public/css/DatLichKham/reset.css">
        <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/public/css/DatLichKham/base.css">
        <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/public/css/DatLichKham/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
                 
                    <a href="http://localhost/BTL_Dat_Lich_Kham/DatLichKham/datLich?soDienThoai=   <?php
                                if(isset($data["getBenhNhan"]) && $data["getBenhNhan"] != null ){
                                    echo $data["getBenhNhan"][0]["hoTen"];
                                }
                            ?>" target="_blank">
                        <li><i class="fa-solid fa-book"></i> Đặt Lịch</li>
                    </a>

                  
                   
                    <a href="http://localhost/BTL_Dat_Lich_Kham/DatLichKham/dangKyBenhNhan" target="_blank">
                        <li> <i class="fa-solid fa-user"></i>Đăng ký bệnh nhân</li>
                    </a>
                </ul>
            </div>
            

            <div class="inner-social">
                <ul>
                    <!-- <li><a href="./thongTinBenhNhan.html" target="_blank"><img class="imgtt" src="./assets/images/ttcn.png"></a></li> -->

                    <li style="display: flex; justify-content: center; align-items: center;">
                        <a href="http://localhost/BTL_Dat_Lich_Kham/DatLichKham/thongTinBenhNhan" target="_blank">
                            <img class="imgtt" src="http://localhost/BTL_Dat_Lich_Kham/public/images/ttcn.png">
                        </a>
                        <p style="font-size: 17px; margin: 0;"> 
                            <?php
                                if(isset($data["getBenhNhan"]) && $data["getBenhNhan"] != null ){
                                    echo $data["getBenhNhan"][0]["hoTen"];
                                }
                            ?>
                        </p>
                    </li>

                    <li><!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                         Đăng nhập
                        </button></li>

                </ul>
            </div>
            <div class="icon-mobi"><i class="fa-solid fa-bars"></i></div>
        </div>
    </header>
<div>
    <div class="home">
              
        <div class="home__img">
            <img class="img_home" src="https://cdn-pkh.longvan.net/prod-partner/877df3a6-926a-4146-8123-936a79e1eaa7-background_banner.webp" alt="" />
            <div class="home__title"><div className="home__title1">Nền tảng công nghệ</div>    <div class="home__title2"> Kết nối người dân với Cơ sở - Dịch vụ Y tế</div>
               </div>
        </div>
        
        </div>

</div>
   
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nhập tài khoản</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nhập mật khẩu</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
       
      </div>
    </div>
  </div>
    
   







    <footer>
        <div class="container">Code By Lê Ngọc Hùng</div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
  
</body>

</html>