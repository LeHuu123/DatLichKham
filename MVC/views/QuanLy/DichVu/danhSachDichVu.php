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
    <section class="home-section" id="giaoDienDichVu">
        <div>
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Danh Sách <b>Dịch Vụ</b></h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#themDichVu" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Thêm dịch vụ</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="form-search">
                        <form method="POST" action="">
                            <div class="container">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Mã dịch vụ</span>
                                    </div>
                                    <input type="text" class="form-control" id="txtMa" name="txtMa" value=""; ?>">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Tên dịch vụ</span>
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
                                        <th>Mã dịch vụ</th>
                                        <th>Tên dịch vụ</th>
                                        <th>Mô tả</th>
                                        <th>Giá </th>
                                        <th>Mã khoa </th>
                                        <th>Hoạt động</th>    


                                    </tr>
                                </thead>
                                <tbody>

                                <tbody>
                                    <?php
                                 
                                    $dataDichVu = $data["danhSachDichVu"]["data"];

                                    if (isset($dataDichVu) && $dataDichVu != null) {
                                        $i = 0;
                                        foreach ($dataDichVu as $row) {
                                    ?>

                                            <tr>
                                                <td> <?php echo $row["maDichVu"] ?> </td>
                                                <td> <?php echo $row["tenDichVu"] ?> </td>
                                                <td> <?php echo $row["moTa"] ?> </td>
                                                <td> <?php echo $row["gia"] ?> </td>
                                                <td> <?php echo $row["maKhoa"] ?> </td>
                                               
                                                <td>
                                                    <a href="#suaDichVu" class="edit" data-toggle="modal" 
                                                        data-id="<?php echo $row['maDichVu']; ?>"
                                                        data-tenDichVu="<?php echo $row['tenDichVu']; ?>"
                                                        data-moTa="<?php echo $row['moTa']; ?>"
                                                        data-gia="<?php echo $row['gia']; ?>"
                                                        data-maKhoa="<?php echo $row['maKhoa']; ?>"                                                   
                                                    > 
                                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                                    </a>
                                                    

                                
                                            
                                          
                                                    <a href="#xoaDichVu"  class="delete" data-toggle="modal" data-id="<?php echo $row['maDichVu']; ?>">
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
        <div id="themDichVu" class="modal fade add_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/DichVu/themDichVu">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm dịch vụ</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <!-- 1 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tên Dịch Vụ</label>
                                    <input name="tenDichVu"
                                    
                                      type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mô Tả</label>
                                    <input name="moTa" type="text" class="form-control" required>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Giá</label>
                                    <input name="gia" type="text" class="form-control" required>

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
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="themDichVu" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>

     
        <!-- Edit Modal HTML -->
        <div id="suaDichVu" class="modal fade edit_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/DichVu/suaDichVu">
                        <div class="modal-header">
                            <h4 class="modal-title">Sửa dịch vụ</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Mã dịch vụ</label>
                                    <input name="maDichVu" type="text" class="form-control" readonly required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tên Dịch vụ</label>
                                    <input name="tenDichVu" type="text" class="form-control" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mô Tả</label>
                                    <input name="moTa" type="text" class="form-control" required>
                                </div>
                            </div>

                            <!-- 2 -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Giá</label>
                                    <!-- <input type="text" class="form-control" required> -->
                                    <input name="gia" type="number" class="form-control" required>
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
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="suaDichVu" class="btn btn-success" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="xoaDichVu" class="modal fade del_item">
            <div class="modal-dialog">
                <div class="modal-content formModal">
                    <form method="post" action="http://localhost/BTL_Dat_Lich_Kham/DichVu/xoaDichVu">
                        <div class="modal-header">
                            <h4 class="modal-title">Xóa dịch vụ</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p class="text-warning">Bạn có chắc chắn muốn xóa không?</p>
                            <!-- <p class="text-warning"><small>This action cannot be undone.</small></p> -->
                        </div>
                        <!-- mã bệnh nhận  -->
                        <input type="hidden" name="maDichVu">
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="xoaDichVu" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <script src="http://localhost/BTL_Dat_Lich_Kham/public/js/dichVu.js"> </script>
</body>

</html>