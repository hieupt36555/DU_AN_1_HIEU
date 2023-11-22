<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tin Tức</h1>
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

                    <!-- /.card-header -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Nhập Tin Tức</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="index.php?act=addtt" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInput">Tiêu đề</label>
                                    <input class="form-control" type="text" placeholder="Nhập tên danh mục" name="tieu_de">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh Tin Tức</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img">
                                            <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Tải lên</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Ngày đăng</label>
                                    <input class="form-control" type="date" name="ngay_dang" placeholder="Nhập ngày đăng">
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" rows="10" name="noi_dung" placeholder="Nhập nội dung ..."></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <?php
                            if (isset($thongbao) && $thongbao != "") {
                                echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
                            }
                            ?>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="themmoi">Thêm</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>