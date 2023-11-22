<?php
if (is_array($tt)) {
    extract($tt);
  }
?>
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
                            <h3 class="card-title">Sửa tin tức</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="index.php?act=updatett" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                            <input type="hidden" name="id"  value="<?php echo $tt['id_tin_tuc'] ?>">
                                <div class="form-group">
                                    <label for="exampleInput">Tiêu đề</label>
                                    <input class="form-control" type="text" name="tieu_de" value="<?php echo $tt['tieu_de'] ?>" placeholder="Nhập tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Hình ảnh Tin Tức</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="img" value="<?php echo $tt['img'] ?>" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Tải lên</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Ngày đăng</label>
                                    <input class="form-control" type="date" name="ngay_dang" value="<?php echo $tt['ngay_dang'] ?>"placeholder="Nhập ngày đăng">
                                </div>
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea class="form-control" rows="10" name="noi_dung" value="<?php echo $tt['noi_dung'] ?>" placeholder="Nhập nội dung ..."></textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" name='capnhat' class="btn btn-primary">Sửa</button>
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