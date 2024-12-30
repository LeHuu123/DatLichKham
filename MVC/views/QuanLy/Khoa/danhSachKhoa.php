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
    <section class="home-section" id="giaoDienKhoa">
        <div>
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Danh Sách <b>Khoa</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#themKhoa" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm khoa</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-search">
                        <form method="POST" action="">
                            <div class="container">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã khoa</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtMa" name="txtMa" value="<?php echo ""; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Tên khoa</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtTen" name="txtTen" value="<?php echo ""; ?>">
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
                                        <th>Mã khoa</th>
                                        <th>Tên khoa</th>
                                        <th>Vị trí</th>
                                        <th>Số điện thoại</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                 
                                 $data = $data["danhSachKhoa"]["data"];

                                 if (isset($data) && $data != null) {
                                     $i = 0;
                                     foreach ($data as $row) {
                                 ?>
                                    <tr>
                                        <td> <?php echo $row["maKhoa"]?> </td>
                                        <td> <?php echo $row["tenKhoa"] ?> </td>
                                        <td> <?php echo $row["viTri"] ?> </td>
                                        <td> <?php echo $row["soDienThoai"] ?> </td>
                                        <td>
                                            <a href="#suaKhoa" class="edit" data-toggle="modal"
                                                data-id="<?php echo $row['maKhoa']; ?>"
                                                data-tenkhoa="<?php echo $row['tenKhoa']; ?>"
                                                data-vitri="<?php echo $row['viTri']; ?>"
                                                data-sodienthoai="<?php echo $row['soDienThoai']; ?>"
                                                
                                            >
                                                <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                            </a>
                                            <a href="#xoaKhoa" class="delete" data-toggle="modal" data-id="<?php echo $row['maKhoa']; ?>">
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
        <div id="themKhoa" class="modal fade add_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/Khoa/themKhoa">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm khoa</h4>
                            
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Mã khoa</label>
                                    <input name = "maKhoa" type="text" class="form-control" readonly required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tên khoa</label>
                                    <input name = "tenKhoa" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Vị Trí</label>
                                    <input name="viTri" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Số điện thoại</label>
                                    <input name = "soDienThoai" type="number" class="form-control" required>
                                </div>
                            </div>

                            
                            
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="themKhoa" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="suaKhoa" class="modal fade edit_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/Khoa/suaKhoa">
                        <div class="modal-header">
                            <h4 class="modal-title">Sửa khoa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Mã khoa</label>
                                    <input name = "maKhoa" type="text" class="form-control" readonly required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tên khoa</label>
                                    <input name = "tenKhoa" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Vị Trí</label>
                                    <input name="viTri" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Số điện thoại</label>
                                    <input name = "soDienThoai" type="number" class="form-control" required>
                                </div>
                            </div>

                            
                            
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name = "suaKhoa" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="xoaKhoa" class="modal fade del_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/Khoa/xoaKhoa">
                        <div class="modal-header">
                            <h4 class="modal-title">Xóa khoa</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-warning">Bạn có chắc chắn muốn xóa không?</p>
                            <!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
                        </div>

                        <!-- mã bệnh nhận  -->
                        <input type="hidden" name="maKhoa">
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="xoaKhoa" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="http://localhost/BTL_Dat_Lich_Kham/public/js/khoa.js"> </script>
</body>

</html>