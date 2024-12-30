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
    <section class="home-section" id="giaoDienPhieuKham">
        <div>
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Danh Sách <b>Phiếu khám</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addPhieuKham" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm phiếu khám</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-search">
                        <form method="POST" action="">
                            <div class="container">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã phiếu khám</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtMa" name="txtMa" value="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Bác sĩ</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtTen" name="txtTen" value="">
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
                                        <th>Mã phiếu khám</th>
                                        <th>Mã lịch hẹn</th>
                                        <th>Mã bệnh nhân</th>
                                        <th>Mã bác sĩ</th>
                                        <th>Chẩn đoán</th>
                                        <th>Ngày thăm khám</th>
                                        <th>Ghi chú</th>
                                        <th>Hoạt động</th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    
                                    $dataPhieuKham = $data["danhSachPhieuKham"]["data"];
                                    if (isset($dataPhieuKham) && $dataPhieuKham != null) {
                                        $i = 0;
                                        foreach ($dataPhieuKham as $row) {
                                    ?>

                                            <tr>
                                                <td> <?php echo $row["maPhieuKham"] ?> </td>
                                                <td> <?php echo $row["maLichHen"] ?> </td>
                                                <td> <?php echo $row["maBenhNhan"] ?> </td>
                                                <td> <?php echo $row["maBacSi"] ?> </td>
                                                <td> <?php echo $row["chuanDoan"] ?> </td>
                                                <td> <?php echo $row["ngayThamKham"] ?> </td>
                                                <td> <?php echo $row["ghiChu"] ?> </td>

                                               
                                                <td>
                                                    <a href="#editPhieuKham" class="edit" data-toggle="modal" 
                                                        data-id="<?php echo $row['maPhieuKham']; ?>"
                                                        data-maLichHen="<?php echo $row['maLichHen']; ?>"
                                                        data-maBenhNhan="<?php echo $row['maBenhNhan']; ?>"
                                                        data-maBacSi="<?php echo $row['maBacSi']; ?>"
                                                        data-chuanDoan="<?php echo $row['chuanDoan']; ?>"
                                                        data-ngayThamKham="<?php echo $row['ngayThamKham']; ?>"
                                                        data-ghiChu="<?php echo $row['ghiChu']; ?>"

                                                      
                                                    > 
                                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                    </a>
                                                    <a href="#deletePhieuKham"  class="delete" data-toggle="modal" data-id="<?php echo $row['maPhieuKham']; ?>">
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
        <div id="addPhieuKham" class="modal fade add_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/PhieuKham/themPhieuKham">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm phiếu khám</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- 1 -->
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Lịch hẹn</label>
                                    <select name="maLichHen" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn lịch hẹn...</option>
                                        <?php
                                        $dataLichHen = $data["danhSachLichHen"]["data"];
                                        if (isset($dataLichHen) && $dataLichHen != null) {
                                            $i = 0;
                                            foreach ($dataLichHen as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maLichHen"] ?>"><?php echo $row["maLichHen"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
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
                                    </div>
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
                                    <label>Chẩn đoán</label>
                                    <input name="chuanDoan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ngày thăm khám</label>
                                    <input name="ngayThamKham" type="date" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ghi chú</label>
                                    <input name="ghiChu" type="text" class="form-control" required>
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
                            <input type="submit" name="themPhieuKham" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editPhieuKham" class="modal fade edit_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/PhieuKham/suaPhieuKham">
                        <div class="modal-header">
                            <h4 class="modal-title">Sửa phiếu khám</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Mã phiếu khám</label>
                                    <input name="maPhieuKham" type="text" class="form-control" readonly required>
                                </div>
                            </div>
                            <!-- 1 -->
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Lịch hẹn</label>
                                    <select name="maLichHen" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn lịch hẹn...</option>
                                        <?php
                                        $dataLichHen = $data["danhSachLichHen"]["data"];
                                        if (isset($dataLichHen) && $dataLichHen != null) {
                                            $i = 0;
                                            foreach ($dataLichHen as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maLichHen"] ?>"><?php echo $row["maLichHen"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
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
                            </div>

                            <!-- 3 -->
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
                                    <label>Chẩn đoán</label>
                                    <input name="chuanDoan" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ngày thăm khám</label>
                                    <input name="ngayThamKham" type="date" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Ghi chú</label>
                                    <input name="ghiChu" type="text" class="form-control" required>
                                </div>
                            </div>
                            </div>
                            


                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" name="suaPhieuKham" class="btn btn-info" value="Save">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deletePhieuKham" class="modal fade del_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/PhieuKham/xoaPhieuKham">
                        <div class="modal-header">
                            <h4 class="modal-title">Xóa phiếu khám</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-warning">Bạn có chắc chắn muốn xóa không?</p>
                            <!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
                        </div>
                        <!-- mã bệnh nhận  -->
                        <input type="hidden" name="maPhieuKham">
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="xoaPhieuKham" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="http://localhost/BTL_Dat_Lich_Kham/public/js/phieuKham.js"> </script>
</body>

</html>