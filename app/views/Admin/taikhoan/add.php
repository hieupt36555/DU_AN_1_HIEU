<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tài Khoản</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Nhập thông tin Tài Khoản</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="index.php?act=addtk" method="POST" enctype="multipart/form-data">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInput">Tên đăng nhập</label>
                                        <input class="form-control" name='tendangnhap' type="text" placeholder="Nhập tên đăng nhập">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" name='matkhau' class="form-control" id="exampleInputPassword1" placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Họ tên</label>
                                        <input class="form-control" name='hoten' type="text" placeholder="Nhập họ tên">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Hình ảnh</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name='hinhanh' class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Tải lên</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name='email' class="form-control" id="exampleInputEmail1" placeholder="Nhập email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Số điện thoại</label>
                                        <input class="form-control" name='sdt' type="text" placeholder="Nhập số điện thoại">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInput">Địa chỉ</label>
                                        <input class="form-control" name='diachi' type="text" placeholder="Nhập địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <label>Chức vụ</label>
                                        <select name='idphanquyen' class="form-control">
                                              <?php foreach ($listphanquyen as $phanquyen): ?>
                                                <tr>
                                              <option value="<?php echo $phanquyen['id_phan_quyen']?>"><?php echo $phanquyen['ten_chuc_nang']?></option>
                                              <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng Thái</label>
                                        <select name="trangthai" class="form-control">
                                            <option value="ON">On</option>
                                            <option value="OFF">Off</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name='themmoi' class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>