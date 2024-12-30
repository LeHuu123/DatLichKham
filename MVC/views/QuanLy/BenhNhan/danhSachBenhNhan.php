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
    <section class="home-section" id="giaoDienBenhNhan">
        <div>
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Danh Sách <b>Bệnh Nhân</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm bệnh nhân</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-search">
                        <form method="POST" action="">
                            <div class="container">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã bệnh nhân</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtMa" name="txtMa" value=""; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Tên bệnh nhân</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtTen" name="txtTen" value=""; ?>">
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
                                        <th>Mã bệnh nhân</th>
                                        <th>Họ tên</th>
                                        <th>Ngày sinh</th>
                                        <th>Giới tính</th>
                                        <th>Địa chỉ</th>
                                        <th>Số điện thoại</th>
                                        <th>Email</th>
                                        <th>Nghề nghiệp</th>
                                        <th>Dân tộc</th>
                                        <th>Hoạt động</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                 
                                    $data = $data["danhSachBenhNhan"]["data"];

                                    if (isset($data) && $data != null) {
                                        $i = 0;
                                        foreach ($data as $row) {
                                    ?>

                                            <tr>
                                                <td> <?php echo $row["maBenhNhan"] ?> </td>
                                                <td> <?php echo $row["hoTen"] ?> </td>
                                                <td> <?php echo $row["ngaySinh"] ?> </td>
                                                <td> <?php echo $row["gioiTinh"] ?> </td>
                                                <td> <?php echo $row["diaChi"] ?> </td>
                                                <td> <?php echo $row["soDienThoai"] ?> </td>
                                                <td> <?php echo $row["email"] ?> </td>
                                                <td> <?php echo $row["ngheNghiep"] ?> </td>
                                                <td> <?php echo $row["danToc"] ?> </td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal" 
                                                        data-id="<?php echo $row['maBenhNhan']; ?>"
                                                        data-hoten="<?php echo $row['hoTen']; ?>"
                                                        data-sodienthoai="<?php echo $row['soDienThoai']; ?>"
                                                        data-gioitinh="<?php echo $row['gioiTinh']; ?>"
                                                        data-ngaysinh="<?php echo $row['ngaySinh']; ?>"
                                                        data-dantoc="<?php echo $row['danToc']; ?>"
                                                        data-nghe="<?php echo $row['ngheNghiep']; ?>"
                                                        data-email="<?php echo $row['email']; ?>"
                                                        data-diachi="<?php echo $row['diaChi']; ?>"
                                                    > 
                                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                    </a>
                                                    <a href="#deleteEmployeeModal"  class="delete" data-toggle="modal" data-id="<?php echo $row['maBenhNhan']; ?>">
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
        <div id="addEmployeeModal" class="modal fade add_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/BenhNhan/themBenhNhan">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm bệnh nhân</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- 1 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Họ tên</label>
                                    <input name="hoTen" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Số điện thoại</label>
                                    <input name="soDienThoai" type="number" class="form-control" required>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Giới tính</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <select id="inputState" name="gioiTinh" class="form-control" placeholder="Email">
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
                            </div>

                            <!-- 3 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nghề nghiệp</label>
                                    <input type="text" name="ngheNghiep" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                            </div>

                            <!-- 4 -->
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label>Dịa chỉ</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <textarea class="form-control" name="diaChi" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="themBenhNhan" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade edit_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/BenhNhan/suaBenhNhan">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Mã bệnh nhân</label>
                                    <input name = "maBenhNhan" type="text" class="form-control" readonly required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Họ tên</label>
                                    <input name = "hoTen" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Số điện thoại</label>
                                    <input name = "soDienThoai" type="number" class="form-control" required>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Giới tính</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <select name = "gioiTinh" id="inputState" class="form-control" placeholder="Email">
                                        <option selected disabled value="">Chọn giới tính...</option>
                                        <option value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        <option value="Khác">Khác</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Ngày sinh</label>
                                    <input name = "ngaySinh" type="date" class="form-control" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Dân tộc</label>
                                    <input name = "danToc" type="text" class="form-control" required>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nghề nghiệp</label>
                                    <input name = "ngheNghiep" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>email</label>
                                    <input name = "email" type="email" class="form-control" required>
                                </div>
                            </div>

                            <!-- 4 -->
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label>Dịa chỉ</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <textarea name = "diaChi" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name = "suaBenhNhan" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade del_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/BenhNhan/xoaBenhNhan">
                        <div class="modal-header">
                            <h4 class="modal-title">Xóa bệnh nhân</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-warning">Bạn có chắc chắn muốn xóa không?</p>
                            <!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
                        </div>
                        
                        <!-- mã bệnh nhận  -->
                        <input type="hidden" name="maBenhNhan" >
                        
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="xoaBenhNhan" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="http://localhost/BTL_Dat_Lich_Kham/public/js/benhNhan.js"> </script>
</body>

</html>