<?php
if (isset($bner) && is_array($bner)) {
    extract($bner);
}

?>
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Banner</h1>
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
                                        <h3 class="card-title">Sửa Banner</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <form action="index.php?act=updatebn" method="POST"  enctype="multipart/form-data">
                                        <div class="card-body">
                                            
                                        <input type="hidden" name="id_banner" value="<?= isset($id_banner) ? $id_banner : '' ?>">
                                          <div class="form-group">
                                            <label for="exampleInputFile">Hình ảnh Banner</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input"
                                                        id="exampleInputFile" name="img"  >
                                                    <label class="custom-file-label" for="exampleInputFile">Chọn ảnh</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Tải lên</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInput">Link</label>
                                          <input class="form-control" type="text" placeholder="Nhập Link" name="link"  value="<?= isset($link) ? $link : '' ?>">
                                        </div>
                                        </div>
                                        <!-- /.card-body -->
<?php
if (isset($thongbao) && $thongbao != "") {
    echo '<div class="container mt-3"><div class="alert alert-success" role="alert">' . $thongbao . '</div></div>';
}
?>
                                        <div class="card-footer">
                                            <!-- <button type="submit" class="btn btn-primary" name="capnhat"  >Sửa</button> -->
                                            <input type="submit" value="Cập Nhật" name="capnhat" class="btn btn-primary">
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