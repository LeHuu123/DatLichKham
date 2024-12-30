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
    <section class="home-section"  id = "giaoDienBacSi">
        <div>
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Danh Sách <b>Bác Sĩ</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#themBacSi" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm bác sĩ</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-search">
                        <form method="POST" action="">
                            <div class="container">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã bác sĩ</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtMa" name="txtMa" value=""; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Tên bác sĩ</span>
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
                                        <th>Mã bác sĩ</th>
                                        <th>Họ tên</th>
                                        <th>Chuyên khoa</th>
                                        <th>Ngày sinh</th>
                                        <th>Giới tính</th>
                                        <th>Email</th>
                                        <th>CCCD</th>
                                        <th>Số điện thoại</th>
                                        <th>Địa chỉ</th>
                                        <th>Học vấn</th>
                                        <th>Ngày vào làm</th>
                                        <th>Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $data = $data["danhSachBacSi"]["data"];
                                    if (isset($data) && $data != null) {
                                        $i = 0;
                                        foreach ($data as $row) {
                                    ?>

                                            <tr>
                                                <td> <?php echo $row["maBacSi"] ?> </td>
                                                <td> <?php echo $row["hoTen"] ?> </td>
                                                <td> <?php echo $row["chuyenKhoa"] ?> </td>
                                                <td> <?php echo $row["ngaySinh"] ?> </td>
                                                <td> <?php echo $row["gioiTinh"] ?> </td>
                                                <td> <?php echo $row["email"] ?> </td>
                                                <td> <?php echo $row["cccd"] ?> </td>
                                                <td> <?php echo $row["soDienThoai"] ?> </td>
                                                <td> <?php echo $row["diaChi"] ?> </td>
                                                <td> <?php echo $row["hocVan"] ?> </td>
                                                <td> <?php echo $row["ngayVaoLam"] ?> </td>
                                                <td>
                                                    <a href="#editEmployeeModal" class="edit" data-toggle="modal" 
                                                        data-id="<?php echo $row['maBacSi']; ?>"
                                                        data-hoten="<?php echo $row['hoTen']; ?>"
                                                        data-chuyenkhoa="<?php echo $row['chuyenKhoa']; ?>"
                                                        data-ngaysinh="<?php echo $row['ngaySinh']; ?>"
                                                        data-gioitinh="<?php echo $row['gioiTinh']; ?>"
                                                        data-email="<?php echo $row['email']; ?>"
                                                        data-cccd="<?php echo $row['cccd']; ?>"
                                                        data-sodienthoai="<?php echo $row['soDienThoai']; ?>"
                                                        data-diachi="<?php echo $row['diaChi']; ?>"
                                                        data-hocvan="<?php echo $row['hocVan']; ?>"
                                                        data-ngayvaolam="<?php echo $row['ngayVaoLam']; ?>"
                                                    > 
                                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                    </a>
                                                    <a href="#deleteEmployeeModal"  class="delete" data-toggle="modal" data-id="<?php echo $row['maBacSi']; ?>">
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
        <div id="themBacSi" class="modal fade add_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/BacSi/themBacSi">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm bác sĩ</h4>
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
                                    <input name="ngaySinh" type="date" class="form-control" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label>Ngày vào làm</label>
                                    <input name="ngayVaoLam" type="date" class="form-control" required>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label>Chuyên khoa</label>
                                    <input name="chuyenKhoa" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>email</label>
                                    <input name="email" type="email" class="form-control" required>
                                </div>
                            </div>
                            <!-- 4 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Căn cước công dân</label>
                                    <input name="cccd" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Học vấn</label>
                                    <input name="hocVan" type="text" class="form-control" required>
                                </div>
                            </div>
                            <!-- 5 -->
                            <div class="form-row">

                                <div class="form-group col-md-12">
                                    <label>Địa chỉ</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <textarea class="form-control" name="diaChi" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="themBacSi" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade edit_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/BacSi/suaBacSi">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Doctor</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- 1 -->
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Mã bác sĩ</label>
                                    <input name = "maBacSi" type="text" class="form-control" readonly required>
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
                                    <select id="inputState" name = "gioiTinh" class="form-control" placeholder="Email">
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
                                    <label>Ngày vào làm</label>
                                    <input name = "ngayVaoLam" type="date" class="form-control" required>
                                </div>
                            </div>

                            <!-- 3 -->
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                    <label>Chuyên khoa</label>
                                    <input name = "chuyenKhoa" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>email</label>
                                    <input name = "email" type="email" class="form-control" required>
                                </div>
                            </div>

                            <!-- 4 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Căn cước công dân</label>
                                    <input name = "cccd" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Học vấn</label>
                                    <input name = "hocVan" type="text" class="form-control" required>
                                </div>
                            </div>

                            <!-- 5 -->
                            <div class="form-row">

                                
                                <div class="form-group col-md-12">
                                    <label>Địa chỉ</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <textarea name = "diaChi" class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name = "suaBacSi" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade del_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/BacSi/xoaBacSi">
                        <div class="modal-header">
                            <h4 class="modal-title">Xóa bác sĩ</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-warning">Bạn có chắc chắn muốn xóa không?</p>
                            <!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
                        </div>
                        <input type="hidden" name="maBacSi" >
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="xoaBacSi" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="http://localhost/BTL_Dat_Lich_Kham/public/js/bacSi.js"> </script>
</body>

</html>