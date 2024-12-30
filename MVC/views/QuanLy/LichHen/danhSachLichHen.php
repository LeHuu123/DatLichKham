<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/BTL_Dat_Lich_Kham/public/css/BenhNhan/danhSachBenhNhan.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
    <section class="home-section" id="giaoDienLichHen">
        <div>
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Danh Sách <b>Lịch Hẹn</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addLichHen" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm lịch hẹn</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-search">
                        <form method="POST" action="">
                            <div class="container">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã lịch hẹn</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtMa" name="txtMa" value=""; ?>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã bác sĩ</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtTen" name="txtTen" value=""; ?>
                                </div>
                                <button type="submit" class="btn btn-primary" style="display: block; margin: 0 auto; text-align: center;" name="btnTimKiem">🔎Tìm kiếm</button>
                            </div>
                        </form>
                    </div>

                    <!-- </div> -->
                    <div style="background-color: #E4E9F7; height: 50px"></div>




                    <div id="table-wrapper">
                        <div id="table-scroll">
                            <table class="table table-striped ">
                                <thead>
                                    <tr>
                                        <th>Mã lịch hẹn</th>
                                        <th>Mã bác sĩ</th>
                                        <th>Ngày hẹn</th>
                                        <th>Mã dịch vụ</th>
                                        <th>Số thứ tự</th>
                                        <th>Mã bệnh nhân</th>
                                        <th>Mã khoa</th>
                                        <th>Hoạt động</th>    

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                    $dataLichHen = $data["danhSachLichHen"]["data"];
                                    if (isset($dataLichHen) && $dataLichHen != null) {
                                        $i = 0;
                                        foreach ($dataLichHen as $row) {
                                    ?>

                                            <tr>
                                                <td> <?php echo $row["maLichHen"] ?> </td>
                                                <td> <?php echo $row["maBacSi"] ?> </td>
                                                <td> <?php echo $row["ngayHen"] ?> </td>
                                                <td> <?php echo $row["maDichVu"] ?> </td>
                                                <td> <?php echo $row["soThuTu"] ?> </td>
                                                <td> <?php echo $row["maBenhNhan"] ?> </td>
                                                <td> <?php echo $row["maKhoa"] ?> </td>

                                               
                                                <td>
                                                    <a href="#editLichHen" class="edit" data-toggle="modal" 
                                                        data-id="<?php echo $row['maLichHen']; ?>"
                                                        data-maBacSi="<?php echo $row['maBacSi']; ?>"
                                                        data-ngayHen="<?php echo $row['ngayHen']; ?>"
                                                        data-maDichVu="<?php echo $row['maDichVu']; ?>"
                                                        data-soThuTu="<?php echo $row['soThuTu']; ?>"
                                                        data-maBenhNhan="<?php echo $row['maBenhNhan']; ?>"
                                                        data-maKhoa="<?php echo $row['maKhoa']; ?>"

                                                      
                                                    > 
                                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                    </a>
                                                    <a href="#deleteLichHen"  class="delete" data-toggle="modal" data-id="<?php echo $row['maLichHen']; ?>">
                                                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                                                    </a>
                                                </td>
                                            </tr>

                                    <?php

                                        }
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- add Modal HTML -->
        <div id="addLichHen" class="modal fade add_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/LichHen/themLichHen">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm lịch hẹn</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- 1 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label>Bác sĩ</label>
                                    <select name="maBacSi" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn bác sĩ...</option>
                                        <?php
                                        $dataBacSi = $data["danhSachBacSi"]["data"];
                                        if (isset($dataBacSi) && $dataBacSi != null) {
                                            $i = 0;
                                            foreach ($dataBacSi as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maBacSi"] ?>"><?php echo $row["maBacSi"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ngày hẹn</label>
                                    <input name="ngayHen" type="date" class="form-control" required>
                                </div>
                            </div>

                            <!-- 2 -->
                            <!-- <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Giới tính</label> -->
                            <!-- <input type="text" class="form-control" required> -->
                            <!-- <select id="inputState" name="gioiTinh" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn giới tính...</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Ngày sinh</label>
                                    <input type="date" name="ngaySinh" class="form-control" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Dân tộc</label>
                                    <input type="text" name="danToc" class="form-control" required>
                                </div>
                            </div> -->

                            <!-- 3 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label>Mã dịch vụ</label>
                                    <select name="maDichVu" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn dịch vụ...</option>
                                        <?php
                                        $dataDichVu = $data["danhSachDichVu"]["data"];
                                        if (isset($dataDichVu) && $dataDichVu != null) {
                                            $i = 0;
                                            foreach ($dataDichVu as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maDichVu"] ?>"><?php echo $row["maDichVu"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Số thứ tự</label>
                                    <input type="number" name="soThuTu" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label>Bệnh nhân</label>
                                    <select name="maBenhNhan" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn bệnh nhân...</option>
                                        <?php
                                        $dataBenhNhan = $data["danhSachBenhNhan"]["data"];
                                        if (isset($dataBenhNhan) && $dataBenhNhan != null) {
                                            $i = 0;
                                            foreach ($dataBenhNhan as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maBenhNhan"] ?>"><?php echo $row["maBenhNhan"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label>Khoa</label>
                                    <select name="maKhoa" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn khoa...</option>
                                        <?php
                                        $dataKhoa = $data["danhSachKhoa"]["data"];
                                        if (isset($dataKhoa) && $dataKhoa != null) {
                                            $i = 0;
                                            foreach ($dataKhoa as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maKhoa"] ?>"><?php echo $row["maKhoa"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- 4 -->
                            <!-- <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label>Dịa chỉ</label>
                                    
                                    <textarea class="form-control" name="diaChi" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                            </div> -->
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="themLichHen" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editLichHen" class="modal fade edit_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/LichHen/suaLichHen">
                        <div class="modal-header">
                            <h4 class="modal-title">Sửa lịch hẹn</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Mã lịch hẹn</label>
                                    <input name="maLichHen" type="text" class="form-control" readonly required>
                                </div>
                            </div>
                            <!-- 1 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label>Bác sĩ</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <select name="maBacSi" id="inputState" class="form-control" placeholder="Email">
                                        <option  disabled value="">Chọn bác sĩ...</option>
                                        <?php
                                        $dataBacSi = $data["danhSachBacSi"]["data"];
                                        if (isset($dataBacSi) && $dataBacSi != null) {
                                            $i = 0;
                                            foreach ($dataBacSi as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maBacSi"] ?>"><?php echo $row["maBacSi"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ngày hẹn</label>
                                    <input name="ngayHen" type="date" class="form-control" required>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label>Mã dịch vụ</label>
                                    <select name="maDichVu" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn dịch vụ...</option>
                                        <?php
                                        $dataDichVu = $data["danhSachDichVu"]["data"];
                                        if (isset($dataDichVu) && $dataDichVu != null) {
                                            $i = 0;
                                            foreach ($dataDichVu as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maDichVu"] ?>"><?php echo $row["maDichVu"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Số thứ tự</label>
                                    <input type="number" name="soThuTu" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                <label>Bệnh nhân</label>
                                    <select name="maBenhNhan" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn bệnh nhân...</option>
                                        <?php
                                        $dataBenhNhan = $data["danhSachBenhNhan"]["data"];
                                        if (isset($dataBenhNhan) && $dataBenhNhan != null) {
                                            $i = 0;
                                            foreach ($dataBenhNhan as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maBenhNhan"] ?>"><?php echo $row["maBenhNhan"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                <label>Khoa</label>
                                    <select name="maKhoa" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn khoa...</option>
                                        <?php
                                        $dataKhoa = $data["danhSachKhoa"]["data"];
                                        if (isset($dataKhoa) && $dataKhoa != null) {
                                            $i = 0;
                                            foreach ($dataKhoa as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maKhoa"] ?>"><?php echo $row["maKhoa"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>



                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" name="suaLichHen" class="btn btn-info" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteLichHen" class="modal fade del_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/LichHen/xoaLichHen">
                        <div class="modal-header">
                            <h4 class="modal-title">Xóa lịch hẹn</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-warning">Bạn có chắc chắn muốn xóa không?</p>
                            <!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
                        </div>
                        <!-- mã bệnh nhận  -->
                        <input type="hidden" name="maLichHen">
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="xoaLichHen" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="http://localhost/BTL_Dat_Lich_Kham/public/js/lichHen.js"> </script>
</body>

</html>