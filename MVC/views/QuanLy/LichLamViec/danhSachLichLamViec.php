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
    <section class="home-section" id="giaoDienLichLamViec">
        <div>
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Danh Sách <b>Lịch Làm Việc</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#themLichLamViec" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm lịch làm việc</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-search">
                        <form method="get" action="http://localhost/BTL_Dat_Lich_Kham/LichLamViec/timKiemLichLamViec">
                            <div class="container">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã lịch làm việc</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtMa" name="maLichLamViec" value="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Tên bác sĩ</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtTen" name="tenBacSi" value="">
                                </div>
                                <button type="submit" class="btn btn-primary" style="display: block; margin: 0 auto; text-align: center;" name="btnTimKiemLich">🔎Tìm kiếm</button>
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
                                        <th>Mã lịch</th>
                                        <th>Tên bác sĩ</th>
                                        <th>Ngày làm việc</th>
                                        <th>Thời gian bắt đầu</th>
                                        <th>Thời gian kết thúc</th>
                                        <th>Khoa</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $dataLich = $data["danhSachLich"]["data"];
                                    if (isset($dataLich) && $dataLich != null) {
                                        $i = 0;
                                        foreach ($dataLich as $row) {
                                    ?>

                                            <tr>
                                                <td> <?php echo $row["maLichLamViec"] ?> </td>
                                                <td> <?php echo $row["hoTen"] ?> </td>
                                                <td>
                                                    <?php
                                                    $ngayLamViec = $row["ngayLamViec"];
                                                    $date = new DateTime($ngayLamViec);
                                                    echo $date->format('d-m-Y');
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $thoiGianBatDau = $row["thoiGianBatDau"];
                                                    $dateTime = new DateTime($thoiGianBatDau);
                                                    $thoiGianBatDauShort = $dateTime->format('H:i');
                                                    echo $thoiGianBatDauShort;
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $thoiGianKetThuc = $row["thoiGianKetThuc"];
                                                    $dateTime1 = new DateTime($thoiGianKetThuc);
                                                    $thoiGianKetThucShort = $dateTime1->format('H:i');
                                                    echo $thoiGianKetThucShort;
                                                    ?>
                                                </td>
                                                <td> <?php echo $row["tenKhoa"] ?> </td>
                                                <td>
                                                    <a href="#suaLichLamViec" class="edit" data-toggle="modal" data-id="<?php echo $row['maLichLamViec']; ?>" data-mabacsi="<?php echo $row['maBacSi'] ?>" data-ngaylamviec="<?php echo $ngayLamViec ?>" data-thoigianbatdau="<?php echo $thoiGianBatDauShort; ?>" data-thoigianketthuc="<?php echo $thoiGianKetThucShort; ?>" data-makhoa="<?php echo $row["maKhoa"] ?>">
                                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                    </a>
                                                    <a href="#xoaLichLamViec" class="delete" data-toggle="modal" data-id=<?php echo $row["maLichLamViec"]; ?>>
                                                        <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
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
        <div id="themLichLamViec" class="modal fade add_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/LichLamViec/themLichLamViec">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm lịch làm việc</h4>
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

                                                <option value="<?php echo $row["maBacSi"] ?>"><?php echo $row["hoTen"] ?></option>
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
                                                <option value="<?php echo $row["maKhoa"] ?>"><?php echo $row["tenKhoa"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Ngày làm việc</label>
                                    <input name="ngayLamViec" type="date" class="form-control" required>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Thời gian bắt đầu</label>
                                    <input name="thoiGianBatDau" type="time" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Thời gian kết thúc</label>
                                    <input name="thoiGianKetThuc" type="time" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input name="themLichLamViec" type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="suaLichLamViec" class="modal fade edit_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/LichLamViec/suaLichLamViec">
                        <div class="modal-header">
                            <h4 class="modal-title">Sửa lịch làm việc</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Mã lịch làm việc</label>
                                    <input name="maLichLamViec" type="text" readonly class="form-control" required>
                                </div>
                            </div>
                            <!-- 1 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Bác sĩ</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <select name="maBacSi" id="inputState" class="form-control" placeholder="Email">
                                        <option disabled value="">Chọn bác sĩ...</option>
                                        <?php
                                        $dataBacSi = $data["danhSachBacSi"]["data"];
                                        if (isset($dataBacSi) && $dataBacSi != null) {
                                            $i = 0;
                                            foreach ($dataBacSi as $row) {
                                        ?>
                                                <!-- <input type="text" class="form-control" required> -->

                                                <option value="<?php echo $row["maBacSi"] ?>"><?php echo $row["hoTen"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Khoa</label>
                                    <select name="maKhoa" id="inputState" class="form-control" placeholder="Email">
                                        <option disabled value="">Chọn khoa...</option>
                                        <?php
                                        $dataKhoa = $data["danhSachKhoa"]["data"];

                                        if (isset($dataKhoa) && $dataKhoa != null) {
                                            $i = 0;
                                            foreach ($dataKhoa as $row) {
                                        ?>
                                                <option value="<?php echo $row["maKhoa"] ?>"><?php echo $row["tenKhoa"] ?></option>
                                        <?php

                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label>Ngày làm việc</label>
                                    <input name="ngayLamViec" type="date" class="form-control" required>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Thời gian bắt đầu</label>
                                    <input name="thoiGianBatDau" type="time" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Thời gian kết thúc</label>
                                    <input name="thoiGianKetThuc" type="time" class="form-control" required>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="suaLichLamViec" class="btn btn-info" value="Save">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="xoaLichLamViec" class="modal fade del_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/LichLamViec/xoaLichLamViec">
                        <div class="modal-header">
                            <h4 class="modal-title">Xóa bệnh nhân</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-warning">Bạn có chắc chắn muốn xóa không?</p>
                            <!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
                        </div>

                        <input type="hidden" name="maLichLamViec">

                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input name="xoaLichLamViec" type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="http://localhost/BTL_Dat_Lich_Kham/public/js/lichLamViec.js"> </script>
</body>

</html>